<?
$subject_val = "Re: [OMPI devel] ROMIO update breaks trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 16:05:45 2013" -->
<!-- isoreceived="20131114210545" -->
<!-- sent="Thu, 14 Nov 2013 16:05:44 -0500 (EST)" -->
<!-- isosent="20131114210544" -->
<!-- name="Thomas Naughton" -->
<!-- email="naughtont_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ROMIO update breaks trunk" -->
<!-- id="alpine.OSX.2.01.1311141604380.20941_at_tigger.ornl.gov" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="E8B7115B-1527-44F9-83B6-909E35C03F97_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ROMIO update breaks trunk<br>
<strong>From:</strong> Thomas Naughton (<em>naughtont_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 16:05:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13269.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>In reply to:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13271.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Reply:</strong> <a href="13271.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Does the version in AM_INIT_AUTOMAKE in configure.ac also need to be
<br>
increased?  It currently shows 1.11.
<br>
<p>Thanks,
<br>
--tjn
<br>
<p>&nbsp;&nbsp;_________________________________________________________________________
<br>
&nbsp;&nbsp;&nbsp;Thomas Naughton                                      naughtont_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;Research Associate                                   (865) 576-4184
<br>
<p><p>On Thu, 14 Nov 2013, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ha! Jeff points out that our web site says we are at AM 1.12.2 - yet our
</span><br>
<span class="quotelev1">&gt; HACKING file says 1.11.1 &#160;Sadness
</span><br>
<span class="quotelev1">&gt; I'll leave the romio update alone and update the HACKING file to avoid
</span><br>
<span class="quotelev1">&gt; future confusion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2013, at 12:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Just in case others are encountering this: the recent ROMIO
</span><br>
<span class="quotelev1">&gt;       update contains a line in its configure.ac that breaks the trunk
</span><br>
<span class="quotelev1">&gt;       for automake versions less than 1.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;I've looked a bit around online for this, and the consensus generally seems
</span><br>
<span class="quotelev1">&gt;  to be that AM_PROG_AR should be added in libtool, not in every configure.ac
</span><br>
<span class="quotelev1">&gt;  script out there. It's especially problematic as AM_PROG_AR doesn't exist i
</span><br>
<span class="quotelev1">&gt; n automake before 1.12, which means it breaks, among others, with the automa
</span><br>
<span class="quotelev1">&gt; ke we use to build our distribution tarballs :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See e.g. <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=11401">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=11401</a> for a discussion
</span><br>
<span class="quotelev1">&gt; .&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm going to comment that line out in ompi/mca/io/romio/romio/configure.ac s
</span><br>
<span class="quotelev1">&gt; o the trunk can build until someone figures out (a) if it is really needed, 
</span><br>
<span class="quotelev1">&gt; and (b) how to correctly add it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13269.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>In reply to:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13271.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Reply:</strong> <a href="13271.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
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
