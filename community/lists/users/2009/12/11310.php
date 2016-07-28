<?
$subject_val = "Re: [OMPI users] configuration settings for Mac OSX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 09:43:03 2009" -->
<!-- isoreceived="20091201144303" -->
<!-- sent="Tue, 1 Dec 2009 09:42:58 -0500" -->
<!-- isosent="20091201144258" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration settings for Mac OSX" -->
<!-- id="C8CCA5F3-528C-40AE-A81F-7A9299BBF7CB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="676379.63876.qm_at_web54204.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuration settings for Mac OSX<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 09:42:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11311.php">Brock Palen: "[OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11253.php">Jurgen Heymann: "[OMPI users] configuration settings for Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11313.php">Jurgen Heymann: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 23, 2009, at 12:51 PM, Jurgen Heymann wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to understand what parameters are essential to include  
</span><br>
<span class="quotelev1">&gt; when running ./configure with openmpi-1.3.3 when working with Mac  
</span><br>
<span class="quotelev1">&gt; using PPC (OS 10.4) or Intel platform (OS 10.5). What compilers and  
</span><br>
<span class="quotelev1">&gt; settings work best for the individual platforms (HFS+) and lead to  
</span><br>
<span class="quotelev1">&gt; robust installations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fact is that I can build openmpi rather easily using ./configure -- 
</span><br>
<span class="quotelev1">&gt; prefix=path_to_location on any of the mentioned platforms. Test on  
</span><br>
<span class="quotelev1">&gt; the package-provided examples work without flaw. However, building  
</span><br>
<span class="quotelev1">&gt; mpiblast-1.6 using openmpi fails on either platform (clean, no mpi  
</span><br>
<span class="quotelev1">&gt; alternatives present). Error messages indicate that certain  
</span><br>
<span class="quotelev1">&gt; functions provided within openmpi are not defined e.g.,  
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Free() and MPI::WIN::Free().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the delay on replying here.
<br>
<p>Make sure that you are using the Open MPI that you have installed from  
<br>
source and not the Open MPI that is installed by OS X by default.
<br>
<p>Does that help?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11311.php">Brock Palen: "[OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11253.php">Jurgen Heymann: "[OMPI users] configuration settings for Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11313.php">Jurgen Heymann: "Re: [OMPI users] configuration settings for Mac OSX"</a>
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
