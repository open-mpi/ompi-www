<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 14:00:32 2009" -->
<!-- isoreceived="20090126190032" -->
<!-- sent="Mon, 26 Jan 2009 14:56:27 -0400" -->
<!-- isosent="20090126185627" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="20090126185627.GA6956_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25C281B0-74CD-47CF-8FAA-0A9A17A5A352_at_lanl.gov" -->
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
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 13:56:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7833.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7831.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7833.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7833.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph:
<br>
<p>Please forgive if this has already been covered...
<br>
<p>Have you considered prefixing each line of output from each process
<br>
with something like &quot;process_number&quot; and a colon?
<br>
<p>That is what IBM's poe does.  Separating the output is then easy: 
<br>
&nbsp;&nbsp;cat file | grep 0: &gt; file.0
<br>
&nbsp;&nbsp;cat file | grep 1: &gt; file.1
<br>
etc.
<br>
<p>In the meantime, I got around the problem by having each process open
<br>
its own file (instead of using stdout), and embedding the process
<br>
number in the file name.
<br>
<p>Hope that helps,
<br>
Douglas.
<br>
<p><p>On Sun, Jan 25, 2009 at 05:20:47AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; For those of you following this thread:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been impressed by the various methods used to grab the output  
</span><br>
<span class="quotelev1">&gt; from processes. Since this is clearly something of interest to a broad  
</span><br>
<span class="quotelev1">&gt; audience, I would like to try and make this easier to do by adding  
</span><br>
<span class="quotelev1">&gt; some options to mpirun. Coming in 1.3.1 will be --tag-output, which  
</span><br>
<span class="quotelev1">&gt; will automatically tag each line of output with the rank of the  
</span><br>
<span class="quotelev1">&gt; process - this was already in the works, but obviously doesn't meet  
</span><br>
<span class="quotelev1">&gt; the needs expressed here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have done some prelim work on a couple of options based on this  
</span><br>
<span class="quotelev1">&gt; thread:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. spawn a screen and redirect process output to it, with the ability  
</span><br>
<span class="quotelev1">&gt; to request separate screens for each specified rank. Obviously,  
</span><br>
<span class="quotelev1">&gt; specifying all ranks would be the equivalent of replacing &quot;my_app&quot; on  
</span><br>
<span class="quotelev1">&gt; the mpirun cmd line with &quot;xterm my_app&quot;. However, there are cases  
</span><br>
<span class="quotelev1">&gt; where you only need to see the output from a subset of the ranks, and  
</span><br>
<span class="quotelev1">&gt; that is the intent of this option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. redirect output of specified processes to files using the provided  
</span><br>
<span class="quotelev1">&gt; filename appended with &quot;.rank&quot;. You can do this for all ranks, or a  
</span><br>
<span class="quotelev1">&gt; specified subset of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. timestamp output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there anything else people would like to see?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is also possible to write a dedicated app such as Jody described,  
</span><br>
<span class="quotelev1">&gt; but that is outside my purview for now due to priorities. However, I  
</span><br>
<span class="quotelev1">&gt; can provide technical advice to such an effort, so feel free to ask.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2009, at 12:19 PM, Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;jody wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Hi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;CPUs).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;separately during an mpirun.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev3">&gt; &gt;&gt;opens a xterm for each process,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;which then starts the actual application.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;This works, but is a bit complicated, e.g. finding the window you're
</span><br>
<span class="quotelev3">&gt; &gt;&gt;interested in among 19 others.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;outputs separately, so
</span><br>
<span class="quotelev3">&gt; &gt;&gt;i can make an application in which i can switch between the different
</span><br>
<span class="quotelev3">&gt; &gt;&gt;processor outputs?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev3">&gt; &gt;&gt;redirect the output over a TCP
</span><br>
<span class="quotelev3">&gt; &gt;&gt;socket to a server application.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;But perhaps there is an easier way, or something like this alread  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;does exist?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Thank You
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;For C I use a printf wrapper function that writes the output to a  
</span><br>
<span class="quotelev2">&gt; &gt;logfile. I derive the name of the logfile from the mpi_id. It  
</span><br>
<span class="quotelev2">&gt; &gt;prefixes the lines with a time-stamp, so you also get some basic  
</span><br>
<span class="quotelev2">&gt; &gt;profile information. I can send you the source code if you like.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Regards,
</span><br>
<span class="quotelev2">&gt; &gt;Gijsbert
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>&nbsp;FORTRAN?  
<br>
&nbsp;The syntactically incorrect statement &quot;DO 10 I = 1.10&quot; will parse and
<br>
&nbsp;generate code creating a variable, DO10I, as follows: &quot;DO10I = 1.10&quot;  If that
<br>
&nbsp;doesn't terrify you, it should.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7833.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7831.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7833.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7833.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
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
