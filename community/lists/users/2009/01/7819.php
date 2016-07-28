<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 25 07:20:56 2009" -->
<!-- isoreceived="20090125122056" -->
<!-- sent="Sun, 25 Jan 2009 05:20:47 -0700" -->
<!-- isosent="20090125122047" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="25C281B0-74CD-47CF-8FAA-0A9A17A5A352_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497A1855.5000909_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Handling output of processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-25 07:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7820.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7818.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="7806.php">Gijsbert Wiesenekker: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7820.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7820.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7827.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7832.php">Douglas Guptill: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For those of you following this thread:
<br>
<p>I have been impressed by the various methods used to grab the output  
<br>
from processes. Since this is clearly something of interest to a broad  
<br>
audience, I would like to try and make this easier to do by adding  
<br>
some options to mpirun. Coming in 1.3.1 will be --tag-output, which  
<br>
will automatically tag each line of output with the rank of the  
<br>
process - this was already in the works, but obviously doesn't meet  
<br>
the needs expressed here.
<br>
<p>I have done some prelim work on a couple of options based on this  
<br>
thread:
<br>
<p>1. spawn a screen and redirect process output to it, with the ability  
<br>
to request separate screens for each specified rank. Obviously,  
<br>
specifying all ranks would be the equivalent of replacing &quot;my_app&quot; on  
<br>
the mpirun cmd line with &quot;xterm my_app&quot;. However, there are cases  
<br>
where you only need to see the output from a subset of the ranks, and  
<br>
that is the intent of this option.
<br>
<p>2. redirect output of specified processes to files using the provided  
<br>
filename appended with &quot;.rank&quot;. You can do this for all ranks, or a  
<br>
specified subset of them.
<br>
<p>3. timestamp output
<br>
<p>Is there anything else people would like to see?
<br>
<p>It is also possible to write a dedicated app such as Jody described,  
<br>
but that is outside my purview for now due to priorities. However, I  
<br>
can provide technical advice to such an effort, so feel free to ask.
<br>
<p>Ralph
<br>
<p><p>On Jan 23, 2009, at 12:19 PM, Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt; jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4  
</span><br>
<span class="quotelev2">&gt;&gt; CPUs).
</span><br>
<span class="quotelev2">&gt;&gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev2">&gt;&gt; separately during an mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev2">&gt;&gt; opens a xterm for each process,
</span><br>
<span class="quotelev2">&gt;&gt; which then starts the actual application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This works, but is a bit complicated, e.g. finding the window you're
</span><br>
<span class="quotelev2">&gt;&gt; interested in among 19 others.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev2">&gt;&gt; outputs separately, so
</span><br>
<span class="quotelev2">&gt;&gt; i can make an application in which i can switch between the different
</span><br>
<span class="quotelev2">&gt;&gt; processor outputs?
</span><br>
<span class="quotelev2">&gt;&gt; I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev2">&gt;&gt; redirect the output over a TCP
</span><br>
<span class="quotelev2">&gt;&gt; socket to a server application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But perhaps there is an easier way, or something like this alread  
</span><br>
<span class="quotelev2">&gt;&gt; does exist?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;  Jody
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; For C I use a printf wrapper function that writes the output to a  
</span><br>
<span class="quotelev1">&gt; logfile. I derive the name of the logfile from the mpi_id. It  
</span><br>
<span class="quotelev1">&gt; prefixes the lines with a time-stamp, so you also get some basic  
</span><br>
<span class="quotelev1">&gt; profile information. I can send you the source code if you like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gijsbert
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
<li><strong>Next message:</strong> <a href="7820.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7818.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="7806.php">Gijsbert Wiesenekker: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7820.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7820.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7827.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7832.php">Douglas Guptill: "Re: [OMPI users] Handling output of processes"</a>
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
