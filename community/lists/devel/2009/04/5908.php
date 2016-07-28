<?
$subject_val = "Re: [OMPI devel] OpenMPI without RSH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 15:03:36 2009" -->
<!-- isoreceived="20090429190336" -->
<!-- sent="Wed, 29 Apr 2009 12:02:02 -0700" -->
<!-- isosent="20090429190202" -->
<!-- name="Jerry Ye" -->
<!-- email="jerryye_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI without RSH" -->
<!-- id="C61DF23A.4847%jerryye_at_yahoo-inc.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EED1B380-0FD7-4626-8E98-1EBDC983EB9C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI without RSH<br>
<strong>From:</strong> Jerry Ye (<em>jerryye_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 15:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Previous message:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>In reply to:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Reply:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It actually turned out to be something on my end.  The modification actually works. :-)
<br>
<p>As Rayson guessed, I am using Hadoop.  I actually didn't know that OpenMPI was integrated with Torque but we're moving away from using Torque.  In terms of making the code public, I'll have to double check, but there weren't too many changes involved.
<br>
<p>- jerry
<br>
<p><p>On 4/29/09 11:37 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>On Apr 29, 2009, at 1:38 PM, Jerry Ye wrote:
<br>
<p><span class="quotelev1">&gt; I'm currently working in an environment where I cannot use SSH to
</span><br>
<span class="quotelev1">&gt; launch child processes.  Instead, the process with rank 0 skips the
</span><br>
<span class="quotelev1">&gt; ssh_child function in plm_rsh_module.c and the child processes are
</span><br>
<span class="quotelev1">&gt; all started at the same time on different machines.  Coordination is
</span><br>
<span class="quotelev1">&gt; done with static jobids and ports.  I have sucessfully modified the
</span><br>
<span class="quotelev1">&gt; code to get the hello_c example working.
</span><br>
<p>Excellent.  What mechanism are you using to start your jobs?  Would it
<br>
be easier to fork the rsh plm into your own plugin?  Is this code you
<br>
can share with the community?
<br>
<p><span class="quotelev1">&gt; However, I'm having problems with inter-process communication when
</span><br>
<span class="quotelev1">&gt; using MPI_Bcast.  Is there something else that I'm obviously missing?
</span><br>
<p><p>The PLM just starts up jobs -- other plugins are used for MPI
<br>
communications.  E.g., the TCP BTL is probably what you're using for
<br>
MPI communications.  Is that where it's failing?
<br>
<p><pre>
--
Jeff Squyres
Cisco Systems
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Previous message:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>In reply to:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Reply:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
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
