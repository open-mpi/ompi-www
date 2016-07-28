<?
$subject_val = "Re: [OMPI users] Outputting rank and size for all outputs.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 11:36:41 2008" -->
<!-- isoreceived="20080624153641" -->
<!-- sent="Tue, 24 Jun 2008 16:36:22 +0100" -->
<!-- isosent="20080624153622" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Outputting rank and size for all outputs." -->
<!-- id="1214321782.6823.56.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="177726EB-7222-4379-B525-CC6A82991EBF_at_princeton.edu" -->
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
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-24 11:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5984.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5982.php">Galen Arnold: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>In reply to:</strong> <a href="5981.php">Mark Dobossy: "[OMPI users] Outputting rank and size for all outputs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6050.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6050.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using the openmpi mpirun then you can put the following in a
<br>
wrapper script which will prefix stdout in a manner similar to what you
<br>
appear to want.  Simply add the wrapper script before the name of your
<br>
application.
<br>
<p>Is this the kind of thing you were aiming for?  I'm quite surprised
<br>
mpirun doesn't have an option for this actually, it's a fairly common
<br>
thing to want.
<br>
<p>Ashley Pittman.
<br>
<p>#!/bin/sh
<br>
<p>$@ | sed &quot;s/^/\[rk:$OMPI_MCA_ns_nds_vpid,sz:$OMPI_MCA_ns_nds_num_procs
<br>
\]/&quot;
<br>
<p>On Tue, 2008-06-24 at 11:06 -0400, Mark Dobossy wrote:
<br>
<span class="quotelev1">&gt; Lately I have been doing a great deal of MPI debugging.  I have, on an  
</span><br>
<span class="quotelev1">&gt; occasion or two, fallen into the trap of &quot;Well, that error MUST be  
</span><br>
<span class="quotelev1">&gt; coming from rank X.  There is no way it could be coming from any other  
</span><br>
<span class="quotelev1">&gt; rank...&quot;  Then proceeding to debug what's happening at rank X, only to  
</span><br>
<span class="quotelev1">&gt; find out a few frustrating hours later that rank Y is throwing the  
</span><br>
<span class="quotelev1">&gt; output (I'm sure no one else out there has fallen into this trap).  It  
</span><br>
<span class="quotelev1">&gt; was at that point, I decided to write up some code to automatically  
</span><br>
<span class="quotelev1">&gt; (sort of) output the rank and size of my domain with every output.  I  
</span><br>
<span class="quotelev1">&gt; write mostly in C++, and this is what I came up with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; std::ostream &amp;mpi_info(std::ostream &amp;s) {
</span><br>
<span class="quotelev1">&gt; 	int rank, size;
</span><br>
<span class="quotelev1">&gt; 	rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt; 	size = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt; 	s &lt;&lt; &quot;[rk:&quot; &lt;&lt; rank &lt;&lt; &quot;,sz:&quot; &lt;&lt; size &lt;&lt; &quot;]: &quot;;
</span><br>
<span class="quotelev1">&gt; 	return s;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then in my code, I have changed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; std::cerr &lt;&lt; &quot;blah&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; std::cerr &lt;&lt; mpi_info &lt;&lt; &quot;blah&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (or cout, or file stream, etc...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where &quot;blah&quot; is some amazingly informative error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there other ways people do this?  Simpler ways perhaps?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Mark
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
<li><strong>Next message:</strong> <a href="5984.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5982.php">Galen Arnold: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>In reply to:</strong> <a href="5981.php">Mark Dobossy: "[OMPI users] Outputting rank and size for all outputs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6050.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6050.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
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
