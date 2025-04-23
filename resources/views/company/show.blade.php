<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Company Details') }}
        </h2>
    </x-slot>

    <style>
        .company-name {
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 10px; /* Adds space below the company name */
        }

        .company-about {
            font-size: 20px;
            line-height: 1.6;
            color: #4B5563;
            margin-bottom: 20px; /* Adds space below the about section */
        }

        .info-label {
            font-weight: 600;
            color: #6B7280;
        }

        .info-value {
            font-size: 18px;
            font-weight: 600;
            color: #111827;
        }

        .info-box {
            border-bottom: 1px solid #E5E7EB;
            padding: 12px 16px; /* Adds padding inside the info box */
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px; /* Adds margin between each info box */
        }

        .rounded-card {
            border-radius: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 24px; /* Adds padding inside the main container */
        }

        .company-metrics {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            max-width: 100%;
        }

        .company-metrics .info-box {
            width: calc(50% - 12px);
            box-sizing: border-box;
        }

        /* Ensuring responsive behavior and preventing overflow */
        .company-name, .company-about {
            overflow-wrap: break-word;
            word-wrap: break-word;
        }

        /* Handling container width */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 16px;
            align-items: flex-start;
        }

        .flex-container .left, .flex-container .right {
            width: 48%;
        }

        /* Position the download button at the right end */
        .download-btn-container {
            display: flex;
            justify-content: flex-end;
            width: 100%;
            margin-top: 20px;
        }

        /* Button Styling */
        .download-btn {
            display: inline-block;
            background-color: #4CAF50; /* Green background */
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 6px;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: auto;
            text-align: center;
        }

        .download-btn:hover {
            background-color: #45a049;
        }

        /* Stack items on small screens */
        @media (max-width: 768px) {
            .flex-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .flex-container .left, .flex-container .right {
                width: 100%;
            }
        }
    </style>

    <div class="py-12 bg-white-50">
        <div class="container px-4">
            <div class="bg-white rounded-card p-8 flex-container">

                <!-- Left: Company Name and About -->
                <div class="left">
                    <div class="company-name mb-4">{{ $company->name }}</div>
                    <div class="company-about">{{ $company->about }}</div>
                </div>

                <!-- Right: Company Metrics -->
                <div class="right">
                    <div class="company-metrics">
                        <div class="info-box">
                            <div class="info-label">Market Cap</div>
                            <div class="info-value">₹{{ $company->market_cap }}Cr.</div>
                        </div>

                        <div class="info-box">
                            <div class="info-label">Current Price</div>
                            <div class="info-value">₹{{ $company->current_price }}</div>
                        </div>

                        <div class="info-box">
                            <div class="info-label">High / Low</div>
                            <div class="info-value">₹{{ $company->high_low }}</div>
                        </div>

                        <div class="info-box">
                            <div class="info-label">Stock P/E</div>
                            <div class="info-value">{{ $company->stock_pe }}</div>
                        </div>

                        <div class="info-box">
                            <div class="info-label">Book Value</div>
                            <div class="info-value">₹{{ $company->book_value }}</div>
                        </div>

                        <div class="info-box">
                            <div class="info-label">Dividend Yield</div>
                            <div class="info-value">{{ $company->dividend_yield }}%</div>
                        </div>

                        <div class="info-box">
                            <div class="info-label">ROCE</div>
                            <div class="info-value">{{ $company->roce }}%</div>
                        </div>

                        <div class="info-box">
                            <div class="info-label">ROE</div>
                            <div class="info-value">{{ $company->roe }}%</div>
                        </div>

                        <div class="info-box">
                            <div class="info-label">Face Value</div>
                            <div class="info-value">₹{{ $company->face_value }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="download-btn-container">
                <a href="{{ $company->url }}" class="download-btn" target="_blank">Download</a>
            </div>
        </div>
    </div>
</x-app-layout>
