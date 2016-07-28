<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 16 15:56:51 2007" -->
<!-- isoreceived="20070316195651" -->
<!-- sent="Fri, 16 Mar 2007 13:56:45 -0600" -->
<!-- isosent="20070316195645" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.2rc4 compilate error" -->
<!-- id="9984D5F1-479D-43D8-8D82-18460EA9E699_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="2B00361EE3107A4F88383EC1B041DC9A017D4541_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-16 15:56:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2816.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2814.php">Grismer, Matthew J Civ AFRL/VAAC: "[OMPI users] v1.2rc4 compilate error"</a>
<li><strong>In reply to:</strong> <a href="2814.php">Grismer, Matthew J Civ AFRL/VAAC: "[OMPI users] v1.2rc4 compilate error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2007, at 6:53 AM, Grismer, Matthew J Civ AFRL/VAAC wrote:
<br>
<p><span class="quotelev1">&gt; I attempted to build 1.2rc4 on an Intel Mac Pro running OS X 10.4.9  
</span><br>
<span class="quotelev1">&gt; and using gcc and the Intel Fortran compiler.  The configure  
</span><br>
<span class="quotelev1">&gt; succeeded fine, but make failed with a &#147;What architecture?&#148; error.   
</span><br>
<span class="quotelev1">&gt; I&#146;ve attached the configure and make logs.
</span><br>
<p>The code to print a stacktrace on application errors doesn't appear  
<br>
to be supported on x86_64 code.  A quick workaround is to compile with:
<br>
<p>&nbsp;&nbsp;&nbsp;--enable-mca-no-build=backtrace-darwin
<br>
<p>This will be fixed in Open MPI v1.2.1, which I imagine will be out in  
<br>
the not too distant future.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2816.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2814.php">Grismer, Matthew J Civ AFRL/VAAC: "[OMPI users] v1.2rc4 compilate error"</a>
<li><strong>In reply to:</strong> <a href="2814.php">Grismer, Matthew J Civ AFRL/VAAC: "[OMPI users] v1.2rc4 compilate error"</a>
<!-- nextthread="start" -->
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
