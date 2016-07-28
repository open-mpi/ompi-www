<?
$subject_val = "Re: [OMPI users] Outputting rank and size for all outputs.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 09:53:07 2008" -->
<!-- isoreceived="20080711135307" -->
<!-- sent="Fri, 11 Jul 2008 09:52:40 -0400" -->
<!-- isosent="20080711135240" -->
<!-- name="Mark Dobossy" -->
<!-- email="mdobossy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Outputting rank and size for all outputs." -->
<!-- id="833E2117-1706-49C1-B30C-6EFF450E3510_at_princeton.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C49CC050.E407%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Outputting rank and size for all outputs.<br>
<strong>From:</strong> Mark Dobossy (<em>mdobossy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 09:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="6051.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6050.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Reply:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That sounds great Ralph!  Do you have any more details about how the  
<br>
process rank would be added?
<br>
<p>And thanks for the other suggestions from Ashley and Galen.  Both  
<br>
methods look like they would work great, and are probably a little  
<br>
nicer than my current setup.
<br>
<p>-Mark
<br>
<p><p>On Jul 11, 2008, at 9:46 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Adding the ability to tag stdout/err with the process rank is fairly  
</span><br>
<span class="quotelev1">&gt; simple.
</span><br>
<span class="quotelev1">&gt; We are going to talk about this next week at a design meeting - we  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; several different tagging schemes that people have requested, so we  
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev1">&gt; define a way to meet them all that doesn't create too much ugliness  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will get back to you on this one. Regardless, the earliest version  
</span><br>
<span class="quotelev1">&gt; it could
</span><br>
<span class="quotelev1">&gt; show up in would be 1.3 (which is a tight question given current  
</span><br>
<span class="quotelev1">&gt; release
</span><br>
<span class="quotelev1">&gt; plans).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/24/08 9:36 AM, &quot;Ashley Pittman&quot; &lt;apittman_at_concurrent- 
</span><br>
<span class="quotelev1">&gt; thinking.com&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you are using the openmpi mpirun then you can put the following  
</span><br>
<span class="quotelev2">&gt;&gt; in a
</span><br>
<span class="quotelev2">&gt;&gt; wrapper script which will prefix stdout in a manner similar to what  
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; appear to want.  Simply add the wrapper script before the name of  
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this the kind of thing you were aiming for?  I'm quite surprised
</span><br>
<span class="quotelev2">&gt;&gt; mpirun doesn't have an option for this actually, it's a fairly common
</span><br>
<span class="quotelev2">&gt;&gt; thing to want.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley Pittman.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $@ | sed &quot;s/^/\[rk:$OMPI_MCA_ns_nds_vpid,sz: 
</span><br>
<span class="quotelev2">&gt;&gt; $OMPI_MCA_ns_nds_num_procs
</span><br>
<span class="quotelev2">&gt;&gt; \]/&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 2008-06-24 at 11:06 -0400, Mark Dobossy wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lately I have been doing a great deal of MPI debugging.  I have,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occasion or two, fallen into the trap of &quot;Well, that error MUST be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coming from rank X.  There is no way it could be coming from any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank...&quot;  Then proceeding to debug what's happening at rank X,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find out a few frustrating hours later that rank Y is throwing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output (I'm sure no one else out there has fallen into this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trap).  It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was at that point, I decided to write up some code to automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sort of) output the rank and size of my domain with every  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write mostly in C++, and this is what I came up with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::ostream &amp;mpi_info(std::ostream &amp;s) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int rank, size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s &lt;&lt; &quot;[rk:&quot; &lt;&lt; rank &lt;&lt; &quot;,sz:&quot; &lt;&lt; size &lt;&lt; &quot;]: &quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return s;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then in my code, I have changed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::cerr &lt;&lt; &quot;blah&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::cerr &lt;&lt; mpi_info &lt;&lt; &quot;blah&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (or cout, or file stream, etc...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where &quot;blah&quot; is some amazingly informative error message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are there other ways people do this?  Simpler ways perhaps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="6051.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6050.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Reply:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
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
