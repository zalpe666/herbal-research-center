@extends('layouts.app')

@section('title', 'Animal Model Research')

@section('content')

```
{{-- =========================================================
    HERO
========================================================== --}}
<section class="relative overflow-hidden pt-36 pb-48">

    {{-- Background Image --}}
    <div class="absolute inset-0">

        <img src="{{ asset('images/banner/animal.jpeg') }}"
            alt="Animal Model Research"
            class="h-full w-full scale-105 object-cover" />

        {{-- Main Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-r
            from-green-950 via-green-950/90 to-green-950/40">
        </div>

        {{-- Bottom Gradient --}}
        <div class="absolute inset-x-0 bottom-0 h-52
            bg-gradient-to-t from-green-950 via-green-950/60 to-transparent">
        </div>

        {{-- Top Gradient --}}
        <div class="absolute inset-x-0 top-0 h-40
            bg-gradient-to-b from-green-950/60 to-transparent">
        </div>

    </div>


    {{-- Decorative Grid --}}
    <div class="absolute inset-0 opacity-[0.07]"
        style="background-image: linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px); background-size: 60px 60px;">
    </div>


    {{-- Glow --}}
    <div class="absolute -right-40 -top-40 h-[500px] w-[500px]
        rounded-full bg-green-400/10 blur-3xl">
    </div>

    <div class="absolute -bottom-40 left-1/3 h-[450px] w-[450px]
        rounded-full bg-emerald-400/10 blur-3xl">
    </div>


    {{-- Decorative Circles --}}
    <div class="absolute right-[12%] top-32 hidden h-20 w-20
        rounded-full border border-green-300/20 lg:block">
    </div>

    <div class="absolute right-[15%] top-40 hidden h-4 w-4
        rounded-full bg-green-300/40 blur-sm lg:block">
    </div>


    {{-- Content --}}
    <div class="relative mx-auto max-w-7xl px-6">

        <div class="grid items-center gap-14 lg:grid-cols-[1fr_400px]">

            {{-- LEFT --}}
            <div class="max-w-4xl">

                {{-- Badge --}}
                <div
                    class="mb-6 inline-flex items-center gap-3 rounded-full
                    border border-green-300/30
                    bg-green-950/40
                    px-4 py-2
                    shadow-lg
                    backdrop-blur-md">

                    <span class="flex h-7 w-7 items-center justify-center
                        rounded-full bg-green-400/10">

                        <i class="ri-dna-line text-green-300"></i>

                    </span>

                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-green-200">
                        Animal Research
                    </span>

                    <span class="h-1.5 w-1.5 rounded-full bg-green-300"></span>

                    <span class="text-xs text-green-300">
                        Biomedical Research
                    </span>

                </div>


                {{-- Heading --}}
                <h1 class="max-w-4xl text-4xl font-black leading-[1.05]
                    tracking-tight text-white
                    sm:text-5xl
                    md:text-6xl
                    lg:text-7xl">

                    Animal Model
                    <span class="text-green-300">
                        Research
                    </span>

                </h1>


                {{-- Description --}}
                <p class="mt-7 max-w-2xl text-base leading-relaxed
                    text-green-100/80 md:text-lg">

                    Scientific research using appropriate animal models
                    to investigate biological responses, evaluate potential
                    therapeutic effects, and support the development of
                    evidence-based herbal and biomedical research.

                </p>


                {{-- Feature Pills --}}
                <div class="mt-8 flex flex-wrap gap-3">

                    <div class="inline-flex items-center gap-2 rounded-full
                        border border-white/10 bg-white/5 px-4 py-2
                        backdrop-blur-sm">

                        <i class="ri-microscope-line text-green-300"></i>

                        <span class="text-sm text-green-100">
                            Biological Evaluation
                        </span>

                    </div>

                    <div class="inline-flex items-center gap-2 rounded-full
                        border border-white/10 bg-white/5 px-4 py-2
                        backdrop-blur-sm">

                        <i class="ri-heart-pulse-line text-green-300"></i>

                        <span class="text-sm text-green-100">
                            Physiological Response
                        </span>

                    </div>

                    <div class="inline-flex items-center gap-2 rounded-full
                        border border-white/10 bg-white/5 px-4 py-2
                        backdrop-blur-sm">

                        <i class="ri-shield-check-line text-green-300"></i>

                        <span class="text-sm text-green-100">
                            Ethical Research
                        </span>

                    </div>

                </div>


                {{-- Stats --}}
                <div class="mt-12 grid max-w-2xl grid-cols-3
                    border-t border-white/10 pt-7">

                    <div>

                        <div class="flex items-center gap-2">

                            <i class="ri-test-tube-line text-lg text-green-300"></i>

                            <span class="text-2xl font-bold text-white">
                                03+
                            </span>

                        </div>

                        <p class="mt-1 text-xs text-green-200/60">
                            Research Areas
                        </p>

                    </div>


                    <div class="border-l border-white/10 pl-5">

                        <div class="flex items-center gap-2">

                            <i class="ri-bar-chart-box-line text-lg text-green-300"></i>

                            <span class="text-2xl font-bold text-white">
                                04
                            </span>

                        </div>

                        <p class="mt-1 text-xs text-green-200/60">
                            Evaluation Stages
                        </p>

                    </div>


                    <div class="border-l border-white/10 pl-5">

                        <div class="flex items-center gap-2">

                            <i class="ri-heart-line text-lg text-green-300"></i>

                            <span class="text-2xl font-bold text-white">
                                100%
                            </span>

                        </div>

                        <p class="mt-1 text-xs text-green-200/60">
                            Ethical Focus
                        </p>

                    </div>

                </div>

            </div>


            {{-- RIGHT RESEARCH CARD --}}
            <div class="relative hidden lg:block">

                <div class="absolute inset-0 rounded-[2rem]
                    bg-green-400/10 blur-2xl">
                </div>


                <div class="relative overflow-hidden
                    rounded-[2rem]
                    border border-white/15
                    bg-green-950/50
                    p-7
                    shadow-2xl
                    backdrop-blur-xl">


                    {{-- Header --}}
                    <div class="flex items-center justify-between">

                        <div class="flex items-center gap-3">

                            <div class="flex h-11 w-11 items-center justify-center
                                rounded-xl bg-green-400/10">

                                <i class="ri-microscope-line text-xl text-green-300"></i>

                            </div>

                            <div>

                                <p class="text-sm font-bold text-white">
                                    Research Framework
                                </p>

                                <p class="text-xs text-green-200/50">
                                    Animal Model Evaluation
                                </p>

                            </div>

                        </div>

                        <span class="h-2.5 w-2.5 rounded-full
                            bg-green-400 shadow-lg shadow-green-400/50">
                        </span>

                    </div>


                    <div class="my-6 h-px bg-white/10"></div>


                    {{-- Research Items --}}
                    <div class="space-y-5">

                        {{-- Item --}}
                        <div class="flex items-center gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center
                                rounded-xl bg-white/5">

                                <i class="ri-body-scan-line text-green-300"></i>

                            </div>

                            <div class="flex-1">

                                <p class="text-sm font-semibold text-white">
                                    Biological Response
                                </p>

                                <p class="mt-1 text-xs text-green-200/50">
                                    Observation & evaluation
                                </p>

                            </div>

                            <i class="ri-checkbox-circle-fill text-green-400"></i>

                        </div>


                        {{-- Item --}}
                        <div class="flex items-center gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center
                                rounded-xl bg-white/5">

                                <i class="ri-heart-pulse-line text-green-300"></i>

                            </div>

                            <div class="flex-1">

                                <p class="text-sm font-semibold text-white">
                                    Physiological Parameters
                                </p>

                                <p class="mt-1 text-xs text-green-200/50">
                                    Monitoring & assessment
                                </p>

                            </div>

                            <i class="ri-checkbox-circle-fill text-green-400"></i>

                        </div>


                        {{-- Item --}}
                        <div class="flex items-center gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center
                                rounded-xl bg-white/5">

                                <i class="ri-microscope-line text-green-300"></i>

                            </div>

                            <div class="flex-1">

                                <p class="text-sm font-semibold text-white">
                                    Tissue Evaluation
                                </p>

                                <p class="mt-1 text-xs text-green-200/50">
                                    Histological observation
                                </p>

                            </div>

                            <i class="ri-checkbox-circle-fill text-green-400"></i>

                        </div>


                        {{-- Item --}}
                        <div class="flex items-center gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center
                                rounded-xl bg-white/5">

                                <i class="ri-bar-chart-grouped-line text-green-300"></i>

                            </div>

                            <div class="flex-1">

                                <p class="text-sm font-semibold text-white">
                                    Data Analysis
                                </p>

                                <p class="mt-1 text-xs text-green-200/50">
                                    Scientific interpretation
                                </p>

                            </div>

                            <i class="ri-checkbox-circle-fill text-green-400"></i>

                        </div>

                    </div>


                    {{-- Bottom Info --}}
                    <div class="mt-7 rounded-xl
                        border border-green-400/10
                        bg-green-400/5
                        p-4">

                        <div class="flex items-start gap-3">

                            <i class="ri-information-line mt-0.5 text-green-300"></i>

                            <p class="text-xs leading-relaxed text-green-100/60">

                                Animal models provide valuable biological
                                information that can support preclinical
                                and biomedical research.

                            </p>

                        </div>

                    </div>

                </div>


                {{-- Floating Card --}}
                <div class="absolute -bottom-8 -left-10
                    rounded-2xl
                    border border-white/10
                    bg-green-900/90
                    px-5 py-4
                    shadow-xl
                    backdrop-blur-xl">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 items-center justify-center
                            rounded-xl bg-green-400/10">

                            <i class="ri-shield-check-line text-green-300"></i>

                        </div>

                        <div>

                            <p class="text-xs text-green-200/50">
                                Research Principle
                            </p>

                            <p class="text-sm font-bold text-white">
                                Ethical & Responsible
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Bottom Wave --}}
    <div class="absolute inset-x-0 bottom-0">

        <svg
            class="h-20 w-full text-green-950"
            viewBox="0 0 1440 120"
            preserveAspectRatio="none">

            <path
                fill="currentColor"
                d="M0,80 C240,20 480,20 720,70 C960,120 1200,120 1440,50 L1440,120 L0,120 Z">
            </path>

        </svg>

    </div>

</section>


{{-- =========================================================
    INTRODUCTION
========================================================== --}}
<section class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="grid items-center gap-14 lg:grid-cols-2">

            {{-- Text --}}
            <div>

                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-green-700">
                    Overview
                </span>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                    Animal Models in Biomedical Research
                </h2>

                <p class="mt-6 leading-relaxed text-gray-600">

                    Animal model research is an important component of
                    preclinical investigation used to understand biological
                    processes, evaluate potential interventions, and study
                    physiological responses under controlled conditions.

                </p>

                <p class="mt-4 leading-relaxed text-gray-600">

                    Appropriate animal models can provide valuable information
                    before a research finding is considered for further
                    investigation. The selection of the model is based on
                    the scientific objectives, biological characteristics,
                    and requirements of the study.

                </p>

            </div>


            {{-- Highlight --}}
            <div class="rounded-3xl border border-green-100 bg-green-50 p-8">

                <div class="flex h-14 w-14 items-center justify-center
                    rounded-2xl bg-green-700 text-2xl text-white">

                    <i class="ri-dna-line"></i>

                </div>

                <h3 class="mt-6 text-xl font-bold text-gray-900">
                    Translational Research
                </h3>

                <p class="mt-3 leading-relaxed text-gray-600">

                    Findings obtained from animal studies can contribute
                    to understanding mechanisms of action, biological
                    responses, safety profiles, and potential therapeutic
                    effects.

                </p>

                <div class="mt-6 flex items-center gap-3">

                    <i class="ri-arrow-right-circle-line text-xl text-green-700"></i>

                    <span class="text-sm font-semibold text-green-800">
                        From experimental observation to scientific evidence
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    RESEARCH OBJECTIVES
========================================================== --}}
<section class="bg-gray-50 py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="mx-auto max-w-3xl text-center">

            <span class="text-sm font-semibold uppercase tracking-[0.2em] text-green-700">
                Research Objectives
            </span>

            <h2 class="mt-3 text-3xl font-bold text-gray-900 md:text-4xl">
                What Does Animal Model Research Evaluate?
            </h2>

            <p class="mt-5 leading-relaxed text-gray-600">

                Animal studies may be designed to investigate different
                biological parameters depending on the objectives of
                each research project.

            </p>

        </div>


        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            {{-- Card --}}
            <div class="group rounded-2xl border border-gray-100 bg-white p-7
                shadow-sm transition-all duration-300
                hover:-translate-y-1 hover:border-green-200 hover:shadow-lg">

                <div class="flex h-12 w-12 items-center justify-center
                    rounded-xl bg-green-50 text-xl text-green-700
                    transition group-hover:bg-green-700 group-hover:text-white">

                    <i class="ri-heart-pulse-line"></i>

                </div>

                <h3 class="mt-5 font-bold text-gray-900">
                    Physiological Response
                </h3>

                <p class="mt-3 text-sm leading-relaxed text-gray-600">

                    Observation of physiological changes following
                    administration of a test substance or intervention.

                </p>

            </div>


            {{-- Card --}}
            <div class="group rounded-2xl border border-gray-100 bg-white p-7
                shadow-sm transition-all duration-300
                hover:-translate-y-1 hover:border-green-200 hover:shadow-lg">

                <div class="flex h-12 w-12 items-center justify-center
                    rounded-xl bg-green-50 text-xl text-green-700
                    transition group-hover:bg-green-700 group-hover:text-white">

                    <i class="ri-microscope-line"></i>

                </div>

                <h3 class="mt-5 font-bold text-gray-900">
                    Tissue Response
                </h3>

                <p class="mt-3 text-sm leading-relaxed text-gray-600">

                    Evaluation of tissue and cellular changes using
                    appropriate laboratory examination methods.

                </p>

            </div>


            {{-- Card --}}
            <div class="group rounded-2xl border border-gray-100 bg-white p-7
                shadow-sm transition-all duration-300
                hover:-translate-y-1 hover:border-green-200 hover:shadow-lg">

                <div class="flex h-12 w-12 items-center justify-center
                    rounded-xl bg-green-50 text-xl text-green-700
                    transition group-hover:bg-green-700 group-hover:text-white">

                    <i class="ri-shield-check-line"></i>

                </div>

                <h3 class="mt-5 font-bold text-gray-900">
                    Safety Evaluation
                </h3>

                <p class="mt-3 text-sm leading-relaxed text-gray-600">

                    Assessment of potential adverse effects and
                    biological tolerance under defined experimental
                    conditions.

                </p>

            </div>


            {{-- Card --}}
            <div class="group rounded-2xl border border-gray-100 bg-white p-7
                shadow-sm transition-all duration-300
                hover:-translate-y-1 hover:border-green-200 hover:shadow-lg">

                <div class="flex h-12 w-12 items-center justify-center
                    rounded-xl bg-green-50 text-xl text-green-700
                    transition group-hover:bg-green-700 group-hover:text-white">

                    <i class="ri-line-chart-line"></i>

                </div>

                <h3 class="mt-5 font-bold text-gray-900">
                    Data Evaluation
                </h3>

                <p class="mt-3 text-sm leading-relaxed text-gray-600">

                    Analysis and interpretation of experimental findings
                    to generate meaningful scientific conclusions.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    RESEARCH PROCESS
========================================================== --}}
<section class="bg-green-950 py-20 text-white">

    <div class="mx-auto max-w-7xl px-6">

        <div class="mx-auto max-w-3xl text-center">

            <span class="text-sm font-semibold uppercase tracking-[0.2em] text-green-300">
                Research Workflow
            </span>

            <h2 class="mt-3 text-3xl font-bold md:text-4xl">
                Animal Research Process
            </h2>

            <p class="mt-5 leading-relaxed text-green-100/70">

                A structured research workflow helps ensure that
                experimental procedures and observations are conducted
                systematically.

            </p>

        </div>


        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            {{-- Step 01 --}}
            <div class="rounded-2xl border border-green-800
                bg-green-900/50 p-7">

                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center
                        rounded-xl bg-green-400/10 text-xl text-green-300">

                        <i class="ri-file-list-3-line"></i>

                    </div>

                    <span class="text-4xl font-black text-green-800">
                        01
                    </span>

                </div>

                <h3 class="mt-6 text-lg font-bold">
                    Study Design
                </h3>

                <p class="mt-3 text-sm leading-relaxed text-green-100/70">

                    Define research objectives, experimental parameters,
                    controls, and appropriate study procedures.

                </p>

            </div>


            {{-- Step 02 --}}
            <div class="rounded-2xl border border-green-800
                bg-green-900/50 p-7">

                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center
                        rounded-xl bg-green-400/10 text-xl text-green-300">

                        <i class="ri-dna-line"></i>

                    </div>

                    <span class="text-4xl font-black text-green-800">
                        02
                    </span>

                </div>

                <h3 class="mt-6 text-lg font-bold">
                    Model Selection
                </h3>

                <p class="mt-3 text-sm leading-relaxed text-green-100/70">

                    Select an appropriate animal model based on the
                    biological objectives and scientific requirements.

                </p>

            </div>


            {{-- Step 03 --}}
            <div class="rounded-2xl border border-green-800
                bg-green-900/50 p-7">

                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center
                        rounded-xl bg-green-400/10 text-xl text-green-300">

                        <i class="ri-microscope-line"></i>

                    </div>

                    <span class="text-4xl font-black text-green-800">
                        03
                    </span>

                </div>

                <h3 class="mt-6 text-lg font-bold">
                    Observation
                </h3>

                <p class="mt-3 text-sm leading-relaxed text-green-100/70">

                    Monitor relevant biological, physiological,
                    behavioral, or tissue-related parameters.

                </p>

            </div>


            {{-- Step 04 --}}
            <div class="rounded-2xl border border-green-800
                bg-green-900/50 p-7">

                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center
                        rounded-xl bg-green-400/10 text-xl text-green-300">

                        <i class="ri-bar-chart-grouped-line"></i>

                    </div>

                    <span class="text-4xl font-black text-green-800">
                        04
                    </span>

                </div>

                <h3 class="mt-6 text-lg font-bold">
                    Data Analysis
                </h3>

                <p class="mt-3 text-sm leading-relaxed text-green-100/70">

                    Analyze experimental results and interpret findings
                    according to the research objectives.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    ETHICAL PRINCIPLES
========================================================== --}}
<section class="bg-white py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="grid items-center gap-14 lg:grid-cols-[0.8fr_1.2fr]">

            {{-- Left --}}
            <div>

                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-green-700">
                    Ethical Research
                </span>

                <h2 class="mt-3 text-3xl font-bold text-gray-900 md:text-4xl">
                    Responsible Use of Animal Models
                </h2>

                <p class="mt-5 leading-relaxed text-gray-600">

                    Responsible animal research requires careful consideration
                    of animal welfare, scientific necessity, and appropriate
                    research procedures throughout the study.

                </p>

            </div>


            {{-- Right --}}
            <div class="grid gap-4 sm:grid-cols-3">

                <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6">

                    <div class="flex h-11 w-11 items-center justify-center
                        rounded-xl bg-green-100 text-xl text-green-700">

                        <i class="ri-heart-line"></i>

                    </div>

                    <h3 class="mt-5 font-bold text-gray-900">
                        Welfare
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-gray-600">
                        Animal welfare is considered throughout the
                        research process.
                    </p>

                </div>


                <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6">

                    <div class="flex h-11 w-11 items-center justify-center
                        rounded-xl bg-green-100 text-xl text-green-700">

                        <i class="ri-scales-3-line"></i>

                    </div>

                    <h3 class="mt-5 font-bold text-gray-900">
                        Necessity
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-gray-600">
                        Animal use should be scientifically justified
                        and appropriately designed.
                    </p>

                </div>


                <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6">

                    <div class="flex h-11 w-11 items-center justify-center
                        rounded-xl bg-green-100 text-xl text-green-700">

                        <i class="ri-shield-check-line"></i>

                    </div>

                    <h3 class="mt-5 font-bold text-gray-900">
                        Responsibility
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-gray-600">
                        Research activities should follow applicable
                        ethical and institutional requirements.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    FINAL CTA
========================================================== --}}
<section class="bg-gray-50 py-16">

    <div class="mx-auto max-w-3xl px-6 text-center">

        <div class="mx-auto flex h-14 w-14 items-center justify-center
            rounded-2xl bg-green-100 text-2xl text-green-700">

            <i class="ri-microscope-line"></i>

        </div>

        <h2 class="mt-6 text-2xl font-bold text-gray-900 md:text-3xl">
            Advancing Biomedical and Herbal Research
        </h2>

        <p class="mt-4 leading-relaxed text-gray-600">

            Animal model research provides an important platform for
            investigating biological mechanisms and evaluating potential
            interventions, contributing to the development of
            evidence-based biomedical and herbal research.

        </p>

    </div>

</section>
@endsection
