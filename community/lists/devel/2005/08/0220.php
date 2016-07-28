<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 24 13:09:12 2005" -->
<!-- isoreceived="20050824180912" -->
<!-- sent="Wed, 24 Aug 2005 13:09:11 -0500" -->
<!-- isosent="20050824180911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Current svn build issues.." -->
<!-- id="54034208-7E19-48F4-A1EB-E3A828FC1239_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050824172413.GE1685_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-24 13:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0221.php">David Daniel: "Open MPI over IB in action"</a>
<li><strong>Previous message:</strong> <a href="0219.php">Troy Benjegerdes: "Current svn build issues.."</a>
<li><strong>In reply to:</strong> <a href="0219.php">Troy Benjegerdes: "Current svn build issues.."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this happened a week or three ago.
<br>
<p>Two ways to fix:
<br>
<p>1. cd ompi/mca/ptl/sm/.deps
<br>
foreach file (`ls`)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &gt;! $file
<br>
end
<br>
<p>(assuming csh-flavored shell)
<br>
<p>Then you can make with no problems.
<br>
<p>2. cd ompi/mca/ptl
<br>
rm -rf sm
<br>
svn up
<br>
<p>Then you'll need to re-autogen / configure / etc.
<br>
<p><p><p>On Aug 24, 2005, at 12:24 PM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev1">&gt; Is someone in the process of moving around the ptl/sm code? My  
</span><br>
<span class="quotelev1">&gt; build of
</span><br>
<span class="quotelev1">&gt; SVN revision 7005 fails there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, any tips on testing the OpenIB BTL? with any luck, I'll  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; results for OpenMPI and mviapich later today..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Troy Benjegerdes                'da hozer'                 
</span><br>
<span class="quotelev1">&gt; hozer_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somone asked me why I work on this free (<a href="http://www.fsf.org/">http://www.fsf.org/</a> 
</span><br>
<span class="quotelev1">&gt; philosophy/)
</span><br>
<span class="quotelev1">&gt; software stuff and not get a real job. Charles Shultz had the best  
</span><br>
<span class="quotelev1">&gt; answer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Why do musicians compose symphonies and poets write poems? They do it
</span><br>
<span class="quotelev1">&gt; because life wouldn't have any meaning for them if they didn't.  
</span><br>
<span class="quotelev1">&gt; That's why
</span><br>
<span class="quotelev1">&gt; I draw cartoons. It's my life.&quot; -- Charles Shultz
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
<li><strong>Next message:</strong> <a href="0221.php">David Daniel: "Open MPI over IB in action"</a>
<li><strong>Previous message:</strong> <a href="0219.php">Troy Benjegerdes: "Current svn build issues.."</a>
<li><strong>In reply to:</strong> <a href="0219.php">Troy Benjegerdes: "Current svn build issues.."</a>
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
