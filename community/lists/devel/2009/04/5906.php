<?
$subject_val = "Re: [OMPI devel] OpenMPI without RSH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 14:21:19 2009" -->
<!-- isoreceived="20090429182119" -->
<!-- sent="Wed, 29 Apr 2009 13:21:13 -0500" -->
<!-- isosent="20090429182113" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI without RSH" -->
<!-- id="73a01bf20904291121p2fb918d9ia4aac7e3eb863a6b_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C61DDEA2.482C%jerryye_at_yahoo-inc.com" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 14:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Previous message:</strong> <a href="5905.php">Jeff Squyres: "[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)"</a>
<li><strong>In reply to:</strong> <a href="5904.php">Jerry Ye: "[OMPI devel] OpenMPI without RSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 29, 2009 at 12:38 PM, Jerry Ye &lt;jerryye_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I&#146;m currently working in an environment where I cannot use SSH to launch
</span><br>
<span class="quotelev1">&gt; child processes.  Instead, the process with rank 0 skips the ssh_child
</span><br>
<span class="quotelev1">&gt; function in plm_rsh_module.c and the child processes are all started at the
</span><br>
<span class="quotelev1">&gt; same time on different machines.  Coordination is done with static jobids
</span><br>
<span class="quotelev1">&gt; and ports.  I have sucessfully modified the code to get the hello_c example
</span><br>
<span class="quotelev1">&gt; working.  However, I&#146;m having problems with inter-process communication when
</span><br>
<span class="quotelev1">&gt; using MPI_Bcast.  Is there something else that I&#146;m obviously missing?
</span><br>
<p>Does your remote invocation method setup environment variables on for
<br>
slave tasks correctly??
<br>
<p>I remember MPICH relies on env variables to pass rank and other
<br>
information from the rank 0 process to processes with non-zero ranks.
<br>
(I have not looked at how things are handled in Open MPI in detail...)
<br>
If you loop through all the environment variables using a &quot; while
<br>
(*environ != NULL)  printf(&quot;%s\n&quot;, *environ++); &quot; loop, and compare an
<br>
MPI job started using your remote invocation method vs. the standard
<br>
one, then you can find out the answer easily.
<br>
<p>And if you are using Grid Engine or Torque, then the integration with
<br>
Open MPI is already implemented. May be you are using Hadoop+something
<br>
else?? :D
<br>
<p>Rayson
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - jerry
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
<li><strong>Next message:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Previous message:</strong> <a href="5905.php">Jeff Squyres: "[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)"</a>
<li><strong>In reply to:</strong> <a href="5904.php">Jerry Ye: "[OMPI devel] OpenMPI without RSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
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
