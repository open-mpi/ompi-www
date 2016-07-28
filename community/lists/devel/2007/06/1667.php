<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 16:49:27 2007" -->
<!-- isoreceived="20070612204927" -->
<!-- sent="Tue, 12 Jun 2007 16:49:12 -0400" -->
<!-- isosent="20070612204912" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Major commit to trunk" -->
<!-- id="DB655503-BD3D-4577-9949-3B12F5E3B751_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C29401A0.9823%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-06-12 16:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1668.php">Daniel Spångberg: "[OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Previous message:</strong> <a href="1666.php">Ralph H Castain: "[OMPI devel] Major commit to trunk"</a>
<li><strong>In reply to:</strong> <a href="1666.php">Ralph H Castain: "[OMPI devel] Major commit to trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds good Ralph; thanks!
<br>
<p>On Jun 12, 2007, at 9:54 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made a major commit to the trunk this morning (r15007) that  
</span><br>
<span class="quotelev1">&gt; merits general
</span><br>
<span class="quotelev1">&gt; notification and some explanation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    *** IMPORTANT NOTE ***
</span><br>
<span class="quotelev1">&gt; One major impact of the commit you *may* notice is that support for  
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev1">&gt; environments will be broken. This commit is known to break support  
</span><br>
<span class="quotelev1">&gt; for the
</span><br>
<span class="quotelev1">&gt; following environments: POE, Xgrid, Xcpu, Windows - these  
</span><br>
<span class="quotelev1">&gt; environments will
</span><br>
<span class="quotelev1">&gt; not compile at this time. It has been tested on rsh, SLURM, and Bproc.
</span><br>
<span class="quotelev1">&gt; Modifications for TM support have been made but could not be  
</span><br>
<span class="quotelev1">&gt; verified due to
</span><br>
<span class="quotelev1">&gt; machine problems at LANL. Modifications for SGE have been made but  
</span><br>
<span class="quotelev1">&gt; could not
</span><br>
<span class="quotelev1">&gt; be verified. I will send out a separate note to developers of the  
</span><br>
<span class="quotelev1">&gt; borked
</span><br>
<span class="quotelev1">&gt; environments with suggestions on how to fix the problems. These  
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; relatively minor, mostly involving a minor change to a couple of  
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; calls and the addition of one function call in their respective launch
</span><br>
<span class="quotelev1">&gt; functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As many of you have noted, the ORTE launch procedure relies heavily  
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt; orte_rml.xcast function to communicate occasionally large messages  
</span><br>
<span class="quotelev1">&gt; to every
</span><br>
<span class="quotelev1">&gt; process in a job. This procedure has - until now - been a linear
</span><br>
<span class="quotelev1">&gt; communication that sent the messages directly to every process.  
</span><br>
<span class="quotelev1">&gt; Obviously,
</span><br>
<span class="quotelev1">&gt; as many of you have pointed out, this was a very inefficient  
</span><br>
<span class="quotelev1">&gt; methodology.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This commit repairs that problem, but it comes with a few side  
</span><br>
<span class="quotelev1">&gt; effects. You
</span><br>
<span class="quotelev1">&gt; shouldn't notice anything different (except hopefully for faster  
</span><br>
<span class="quotelev1">&gt; starts),
</span><br>
<span class="quotelev1">&gt; but I will note the differences here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, orte_rml.xcast has become a general broadcast-like messaging  
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; Messages can now be sent to any tag on the daemons or processes.  
</span><br>
<span class="quotelev1">&gt; Note that
</span><br>
<span class="quotelev1">&gt; any message sent via xcast will be delivered to ALL processes in the
</span><br>
<span class="quotelev1">&gt; specified job - you don't get to pick and choose. At a later date,  
</span><br>
<span class="quotelev1">&gt; we will
</span><br>
<span class="quotelev1">&gt; introduce an augmented capability that will use the daemons as  
</span><br>
<span class="quotelev1">&gt; relays, but
</span><br>
<span class="quotelev1">&gt; will allow you to send to a specified array of process names.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We also modified orte_rml.xcast so it supports more scalable  
</span><br>
<span class="quotelev1">&gt; message routing
</span><br>
<span class="quotelev1">&gt; methodologies. At the moment, we support three:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) direct, which sends the message directly to all recipients. By  
</span><br>
<span class="quotelev1">&gt; default,
</span><br>
<span class="quotelev1">&gt; this mode is used whenever we have less than 10 daemons. You can  
</span><br>
<span class="quotelev1">&gt; adjust that
</span><br>
<span class="quotelev1">&gt; crossover point via the oob_xcast_linear_xover param - set this  
</span><br>
<span class="quotelev1">&gt; param to the
</span><br>
<span class="quotelev1">&gt; number of daemons where you want direct to give way to linear.  
</span><br>
<span class="quotelev1">&gt; Obviously, if
</span><br>
<span class="quotelev1">&gt; you set this to something very large, then we will only use direct  
</span><br>
<span class="quotelev1">&gt; xcast
</span><br>
<span class="quotelev1">&gt; mode - set it to zero, and we won't use direct at all.  
</span><br>
<span class="quotelev1">&gt; Alternatively, you
</span><br>
<span class="quotelev1">&gt; can force the use of direct at all scales by setting oob_xcast_mode to
</span><br>
<span class="quotelev1">&gt; &quot;direct&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) linear, which sends the message to the local daemon on each  
</span><br>
<span class="quotelev1">&gt; node. The
</span><br>
<span class="quotelev1">&gt; daemon then relays it to its own local procs. Note that the daemons  
</span><br>
<span class="quotelev1">&gt; in this
</span><br>
<span class="quotelev1">&gt; mode do not relay the message between themselves, but only to their  
</span><br>
<span class="quotelev1">&gt; local
</span><br>
<span class="quotelev1">&gt; procs. As per a prior message, I have set linear to be the default  
</span><br>
<span class="quotelev1">&gt; mode on
</span><br>
<span class="quotelev1">&gt; all jobs involving more than 10 daemons. Again, you can adjust this by
</span><br>
<span class="quotelev1">&gt; setting a lower bound on where linear kicks in (as described  
</span><br>
<span class="quotelev1">&gt; above). You can
</span><br>
<span class="quotelev1">&gt; also set an upper bound where linear gives way to binomial by  
</span><br>
<span class="quotelev1">&gt; setting the
</span><br>
<span class="quotelev1">&gt; oob_xcast_binomial_xover param. Alternatively, you can force the  
</span><br>
<span class="quotelev1">&gt; use of
</span><br>
<span class="quotelev1">&gt; linear at all scales by setting oob_xcast_mode to &quot;linear&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (c) binomial, which sends the message via a binomial algo across  
</span><br>
<span class="quotelev1">&gt; all the
</span><br>
<span class="quotelev1">&gt; daemons, each of which then relays to its own local procs. This is  
</span><br>
<span class="quotelev1">&gt; just a
</span><br>
<span class="quotelev1">&gt; typical binomial algorithm across the daemons. At this time, I have  
</span><br>
<span class="quotelev1">&gt; set the
</span><br>
<span class="quotelev1">&gt; default on this mode to be &quot;off&quot; so it will never kick on. If you  
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev1">&gt; try it out, you will need to either adjust the xover param (as  
</span><br>
<span class="quotelev1">&gt; described
</span><br>
<span class="quotelev1">&gt; above), or set oob_xcast_mode to &quot;binomial&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note that we *do* use the direct messaging mode whenever  
</span><br>
<span class="quotelev1">&gt; there is
</span><br>
<span class="quotelev1">&gt; only one daemon in the system. This is non-negotiable - it is  
</span><br>
<span class="quotelev1">&gt; mandated for
</span><br>
<span class="quotelev1">&gt; singletons and for getting mpirun up and running. Besides, if there  
</span><br>
<span class="quotelev1">&gt; is only
</span><br>
<span class="quotelev1">&gt; one daemon in the system, every message goes &quot;direct&quot; no matter  
</span><br>
<span class="quotelev1">&gt; which mode
</span><br>
<span class="quotelev1">&gt; you pick, so you shouldn't care. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also note that the current crossover points were totally arbitrary.  
</span><br>
<span class="quotelev1">&gt; I have
</span><br>
<span class="quotelev1">&gt; no data to base those crossovers on, so I simply picked something  
</span><br>
<span class="quotelev1">&gt; for now.
</span><br>
<span class="quotelev1">&gt; If those of you with access to larger systems and with some free  
</span><br>
<span class="quotelev1">&gt; time could
</span><br>
<span class="quotelev1">&gt; try various values, then we could come up with something more  
</span><br>
<span class="quotelev1">&gt; intelligent.
</span><br>
<span class="quotelev1">&gt; Any data would be most appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This commit also involved a significant change to the orteds  
</span><br>
<span class="quotelev1">&gt; themselves. The
</span><br>
<span class="quotelev1">&gt; requirement that orteds *always* be available to relay messages  
</span><br>
<span class="quotelev1">&gt; mandated a
</span><br>
<span class="quotelev1">&gt; change in the way they come alive. In the past, orteds bootstrapped
</span><br>
<span class="quotelev1">&gt; themselves in two totally different code paths: bootproxy or VM.  
</span><br>
<span class="quotelev1">&gt; This is no
</span><br>
<span class="quotelev1">&gt; longer supported. Orteds now always behave like they are part of a  
</span><br>
<span class="quotelev1">&gt; virtual
</span><br>
<span class="quotelev1">&gt; machine - they simply launch a job if mpirun tells them to do so.  
</span><br>
<span class="quotelev1">&gt; This is
</span><br>
<span class="quotelev1">&gt; another step towards creating an &quot;orteboot&quot; functionality, but also  
</span><br>
<span class="quotelev1">&gt; provided
</span><br>
<span class="quotelev1">&gt; a clean system for supporting message relaying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note one major impact of this commit: multiple daemons on a node  
</span><br>
<span class="quotelev1">&gt; cannot be
</span><br>
<span class="quotelev1">&gt; supported any longer! Only a single daemon/node is now allowed. You
</span><br>
<span class="quotelev1">&gt; shouldn't notice any difference as this was always transparent.  
</span><br>
<span class="quotelev1">&gt; However, if
</span><br>
<span class="quotelev1">&gt; you are working in an environment where daemons occupied job slots,  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; should see some benefit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know of any problems. I did my best to test this, but  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; will undoubtedly be some problems that crop up, and some code paths  
</span><br>
<span class="quotelev1">&gt; that are
</span><br>
<span class="quotelev1">&gt; borked that I didn't see on any of my available machines or in my
</span><br>
<span class="quotelev1">&gt; configurations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1668.php">Daniel Spångberg: "[OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Previous message:</strong> <a href="1666.php">Ralph H Castain: "[OMPI devel] Major commit to trunk"</a>
<li><strong>In reply to:</strong> <a href="1666.php">Ralph H Castain: "[OMPI devel] Major commit to trunk"</a>
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
