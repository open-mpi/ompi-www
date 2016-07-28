<?
$subject_val = "Re: [OMPI users] mpi error?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 11:47:15 2010" -->
<!-- isoreceived="20100311164715" -->
<!-- sent="Thu, 11 Mar 2010 08:47:12 -0800" -->
<!-- isosent="20100311164712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi error?" -->
<!-- id="53AEA5E9-8BFF-4F55-BC1E-151309D3E0E6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="76aeda4a1003110836v1cfc32bao532ebc1453c08e1e_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] mpi error?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 11:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12327.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Previous message:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>In reply to:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12327.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Reply:</strong> <a href="12327.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Debugging this is probably not going to be within the scope of Open MPI -- it looks like your app is seg faulting inside some routine called DoCharset.  If you're getting corefiles, you might try loading them up in the debugger and see what is going wrong, etc.  I.e., standard debugging rules apply here -- it's not necessarily special just because it's an MPI application.
<br>
<p>Sorry!
<br>
<p><p>On Mar 11, 2010, at 8:36 AM, Matthew MacManes wrote:
<br>
<p><span class="quotelev1">&gt; I &quot;unlimited&quot; my stack space- got a different error, which maybe is a clue.. Im not sure how to vary the rank, like you suggested, so if you have a tip that would be great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the new error:
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] Failing at address: 0x2ba2e9d9c00c
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] [ 0] /lib/libpthread.so.0 [0x2ba2b27ce190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2ba2b29f9abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05298] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] Failing at address: 0x2b089e31600c
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] [ 0] /lib/libpthread.so.0 [0x2b0866d48190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b0866f73abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05299] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] Failing at address: 0x2b1fa264200c
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] [ 0] /lib/libpthread.so.0 [0x2b1f6b074190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b1f6b29fabd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05300] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] Failing at address: 0x2b69f7c3300c
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] [ 0] /lib/libpthread.so.0 [0x2b69c0665190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b69c0890abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05301] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] Failing at address: 0x2b923066b00c
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] [ 0] /lib/libpthread.so.0 [0x2b91f909d190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b91f92c8abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05302] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] Failing at address: 0x2b36bc08c00c
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] [ 0] /lib/libpthread.so.0 [0x2b3684abe190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b3684ce9abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05303] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] Failing at address: 0x2ac048ece00c
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] [ 0] /lib/libpthread.so.0 [0x2ac011900190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2ac011b2babd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05304] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] Failing at address: 0x2ad1bd22900c
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] [ 0] /lib/libpthread.so.0 [0x2ad185c5b190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2ad185e86abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05305] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] Failing at address: 0x2aff7d85000c
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] [ 0] /lib/libpthread.so.0 [0x2aff46282190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2aff464adabd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05306] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] Failing at address: 0x2b8b4104000c
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] [ 0] /lib/libpthread.so.0 [0x2b8b09a72190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b8b09c9dabd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05307] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] Failing at address: 0x2ad33273400c
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] [ 0] /lib/libpthread.so.0 [0x2ad2fb166190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2ad2fb391abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05308] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] Failing at address: 0x2b5e4da9100c
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] [ 0] /lib/libpthread.so.0 [0x2b5e164c3190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b5e166eeabd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05309] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] Failing at address: 0x2b7b2a94300c
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] Failing at address: 0x2b9e2bf4b00c
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] [ 0] /lib/libpthread.so.0 [0x2b9df497d190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b9df4ba8abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05311] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] Failing at address: 0x2b756bf1b00c
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] [ 0] /lib/libpthread.so.0 [0x2b753494d190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b7534b78abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05312] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;       Defining charset called gene1000
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] [ 0] /lib/libpthread.so.0 [0x2b7af3375190]
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] [ 1] mb(DoCharset+0x187) [0x41d9a7]
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] [ 2] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] [ 3] mb(DoExecute+0x67f) [0x42f81f]
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] [ 4] mb(ParseCommand+0x2b2) [0x42edc2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] [ 5] mb(CommandLine+0x17e) [0x4137de]
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] [ 6] mb(main+0x82) [0x413ad2]
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x2b7af35a0abd]
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] [ 8] mb [0x410949]
</span><br>
<span class="quotelev1">&gt; [macmanes:05310] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 9 with PID 5307 on node macmanes exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt; macmanes_at_macmanes:~/mrbayes$
</span><br>
<span class="quotelev1">&gt; _________________________________
</span><br>
<span class="quotelev1">&gt; Matthew MacManes
</span><br>
<span class="quotelev1">&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; University of California- Berkeley
</span><br>
<span class="quotelev1">&gt; Museum of Vertebrate Zoology
</span><br>
<span class="quotelev1">&gt; Phone: 510-495-5833
</span><br>
<span class="quotelev1">&gt; Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
</span><br>
<span class="quotelev1">&gt; Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 11, 2010 at 07:42, Peter Kjellstrom &lt;cap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Thursday 11 March 2010, Matthew MacManes wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Can anybody tell me if this is an error associated with openmpi, versus an
</span><br>
<span class="quotelev2">&gt; &gt; issue with the program I am running (MRBAYES,
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://sourceforge.net/projects/mrbayes/">https://sourceforge.net/projects/mrbayes/</a>)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We are trying to run a large simulated dataset using 1,000,000 bases
</span><br>
<span class="quotelev2">&gt; &gt; divided up into 1000 genes, 5 taxa.. An error is occurring, but we are not
</span><br>
<span class="quotelev2">&gt; &gt; sure why. We are using the MPI version of MRBAYES v3.2-cvs on a linux
</span><br>
<span class="quotelev2">&gt; &gt; 16core 24GB RAM machine. It does not appear as if the program runs out of
</span><br>
<span class="quotelev2">&gt; &gt; memory (max memory usage is 13gb).  Maybe this is an OpenMPI problem and
</span><br>
<span class="quotelev2">&gt; &gt; not related to MrBayes...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See snippet of error message below. Can anybody give me any hints about the
</span><br>
<span class="quotelev2">&gt; &gt; source of the problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using OPENMPI version 1.4.1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Defining charset called gene997
</span><br>
<span class="quotelev2">&gt; &gt; Defining charset called gene998
</span><br>
<span class="quotelev2">&gt; &gt; Defining charset called gene999
</span><br>
<span class="quotelev2">&gt; &gt; Defining charset called gene1000
</span><br>
<span class="quotelev2">&gt; &gt; Defining partition called Genes
</span><br>
<span class="quotelev2">&gt; &gt; [macmanes:02546] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [macmanes:02546] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [macmanes:02546] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [macmanes:02546] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [macmanes:02546] [ 0] /lib/libpthread.so.0 [0x7ffd0f322190]
</span><br>
<span class="quotelev2">&gt; &gt; [macmanes:02546] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that process rank 13 with PID 2546 on node macmanes exited
</span><br>
<span class="quotelev2">&gt; &gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On of the ranks got a &quot;Segmentation fault&quot;. This would typically indicate a
</span><br>
<span class="quotelev1">&gt; problem with the app not the MPI. Maybe you ran out of stack space?
</span><br>
<span class="quotelev1">&gt; (ulimit -s).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried a different/lower number of ranks?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /Peter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12327.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Previous message:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>In reply to:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12327.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Reply:</strong> <a href="12327.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
