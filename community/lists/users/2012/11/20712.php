<?
$subject_val = "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 12:24:29 2012" -->
<!-- isoreceived="20121113172429" -->
<!-- sent="Tue, 13 Nov 2012 18:24:23 +0100" -->
<!-- isosent="20121113172423" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH" -->
<!-- id="1B410C23-518D-4523-B942-757D0FA0FEFB_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BFAF8A19-FA20-4F87-A91F-FBC166854C46_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-13 12:24:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20711.php">Brian Budge: "Re: [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="20710.php">huaibao zhang: "[OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20715.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 13.11.2012 um 15:44 schrieb huaibao zhang:
<br>
<p><span class="quotelev1">&gt; I installed OpenMPI on my Ubuntu 64 bit desktop. At first, I did not specify &quot;prefix&quot;, so even I've installed it. I could not find where it is. Since the &quot;PATH&quot; and &quot;LD&quot; have to be given, the mpicc can find the &quot;lib open-pal.so.0&quot; file. 
</span><br>
<p>You mean &quot;...can't find...&quot;? If you use the default location, it should have the correct settings already even without adding any path to PATH or LD_LIBRARY_PATH.
<br>
<p>You can use:
<br>
<p>$ find /lib -name &quot;libopen-pal.so.0&quot;
<br>
<p>to spot the location. But I wonder about the version. The actual one seems to be libopen-pal.so.4 -&gt; libopen-pal.so.4.0.3 - which version are you using?
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20711.php">Brian Budge: "Re: [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="20710.php">huaibao zhang: "[OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20715.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
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
