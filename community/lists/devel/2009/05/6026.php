<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 12:49:11 2009" -->
<!-- isoreceived="20090514164911" -->
<!-- sent="Thu, 14 May 2009 12:47:58 -0400" -->
<!-- isosent="20090514164758" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 branch" -->
<!-- id="4A0C4B3E.2090000_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905140824u55a84ab0la630d26d5672c630_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.3 branch<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 12:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6027.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6023.php">Ralph Castain: "[OMPI devel] OMPI 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6027.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="6027.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encourage people to please look at your MTT outputs. As we are 
</span><br>
<span class="quotelev1">&gt; preparing to roll the 1.3.3 release, I am seeing a lot of problems on 
</span><br>
<span class="quotelev1">&gt; the branch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. timeouts, coming in two forms: (a) MPI_Abort hanging, and (b) 
</span><br>
<span class="quotelev1">&gt; collectives hanging (this is mostly on Solaris)
</span><br>
<span class="quotelev1">&gt;
</span><br>
Can you clarify or send me a link that makes you believe b is mostly 
<br>
solaris.  Looking at last night's Sun's MTT 1.3 nightly runs I see 47 
<br>
timeouts on Linux and 24 timeouts on Solaris.  That doesn't constitute 
<br>
mostly Solaris to me.  Also how are you determining these timeouts are 
<br>
Collective based?  I have a theory they are but I don't have a clear 
<br>
smoking gun as of yet.
<br>
<p>I've been looking at some collective hangs and segv's.  These seem to 
<br>
happen across different platform and OS (Linux and Solaris).  I've been 
<br>
finding it really hard to reproduce.  I ran MPI_Allreduce_loc_c on a 
<br>
three clusters for 2 days without a hang or segv.  I am really concerned 
<br>
whether we'll even be able to get this to fail with debugging on. 
<br>
<p>I have not been able to get a core or time with a hung run in order to 
<br>
get more information. 
<br>
<span class="quotelev1">&gt; 2. segfaults - mostly on sif, but occasionally elsewhere
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. daemon failed to report back - this was only on sif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We will need to correct many of these for the release - unless it 
</span><br>
<span class="quotelev1">&gt; proves to be due to trivial errors, I don't see how we will be ready 
</span><br>
<span class="quotelev1">&gt; to roll release candidates next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So let's please start taking a look at these?!
</span><br>
<span class="quotelev1">&gt;
</span><br>
I've actually been looking at ours though I have not been extremely 
<br>
vocal.  I was hoping to get more info on our timeouts before requesting 
<br>
help.
<br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6027.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="6025.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6023.php">Ralph Castain: "[OMPI devel] OMPI 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6027.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="6027.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 branch"</a>
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
