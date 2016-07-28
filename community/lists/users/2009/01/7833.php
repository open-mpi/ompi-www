<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 14:14:40 2009" -->
<!-- isoreceived="20090126191440" -->
<!-- sent="Mon, 26 Jan 2009 12:14:28 -0700" -->
<!-- isosent="20090126191428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="7DC27380-94B8-4E06-9DC5-562DE2F062A3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090126185627.GA6956_at_DOME" -->
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
<strong>Date:</strong> 2009-01-26 14:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7834.php">Jeff Squyres: "[OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7832.php">Douglas Guptill: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7832.php">Douglas Guptill: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. The --tag-output option will prepend [job,rank]&lt;stdout&gt; (or  
<br>
stderr, whichever is appropriate) to each line. I don't insert a  
<br>
colon, though I suppose that would easily be done for grep purposes.
<br>
<p>I just finished implementing the --output-filename option that will  
<br>
split the output from each rank into its own file. Completed the  
<br>
timestamp option last night.
<br>
<p>Almost have the --screen option done - it's a little trickier. :-)
<br>
<p>Ralph
<br>
<p>On Jan 26, 2009, at 11:56 AM, Douglas Guptill wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please forgive if this has already been covered...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you considered prefixing each line of output from each process
</span><br>
<span class="quotelev1">&gt; with something like &quot;process_number&quot; and a colon?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is what IBM's poe does.  Separating the output is then easy:
</span><br>
<span class="quotelev1">&gt;  cat file | grep 0: &gt; file.0
</span><br>
<span class="quotelev1">&gt;  cat file | grep 1: &gt; file.1
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the meantime, I got around the problem by having each process open
</span><br>
<span class="quotelev1">&gt; its own file (instead of using stdout), and embedding the process
</span><br>
<span class="quotelev1">&gt; number in the file name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt; Douglas.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jan 25, 2009 at 05:20:47AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; For those of you following this thread:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been impressed by the various methods used to grab the output
</span><br>
<span class="quotelev2">&gt;&gt; from processes. Since this is clearly something of interest to a  
</span><br>
<span class="quotelev2">&gt;&gt; broad
</span><br>
<span class="quotelev2">&gt;&gt; audience, I would like to try and make this easier to do by adding
</span><br>
<span class="quotelev2">&gt;&gt; some options to mpirun. Coming in 1.3.1 will be --tag-output, which
</span><br>
<span class="quotelev2">&gt;&gt; will automatically tag each line of output with the rank of the
</span><br>
<span class="quotelev2">&gt;&gt; process - this was already in the works, but obviously doesn't meet
</span><br>
<span class="quotelev2">&gt;&gt; the needs expressed here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have done some prelim work on a couple of options based on this
</span><br>
<span class="quotelev2">&gt;&gt; thread:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. spawn a screen and redirect process output to it, with the ability
</span><br>
<span class="quotelev2">&gt;&gt; to request separate screens for each specified rank. Obviously,
</span><br>
<span class="quotelev2">&gt;&gt; specifying all ranks would be the equivalent of replacing &quot;my_app&quot; on
</span><br>
<span class="quotelev2">&gt;&gt; the mpirun cmd line with &quot;xterm my_app&quot;. However, there are cases
</span><br>
<span class="quotelev2">&gt;&gt; where you only need to see the output from a subset of the ranks, and
</span><br>
<span class="quotelev2">&gt;&gt; that is the intent of this option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. redirect output of specified processes to files using the provided
</span><br>
<span class="quotelev2">&gt;&gt; filename appended with &quot;.rank&quot;. You can do this for all ranks, or a
</span><br>
<span class="quotelev2">&gt;&gt; specified subset of them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. timestamp output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything else people would like to see?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is also possible to write a dedicated app such as Jody described,
</span><br>
<span class="quotelev2">&gt;&gt; but that is outside my purview for now due to priorities. However, I
</span><br>
<span class="quotelev2">&gt;&gt; can provide technical advice to such an effort, so feel free to ask.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 23, 2009, at 12:19 PM, Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CPUs).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; separately during an mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opens a xterm for each process,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which then starts the actual application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This works, but is a bit complicated, e.g. finding the window  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you're
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interested in among 19 others.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; outputs separately, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i can make an application in which i can switch between the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor outputs?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; redirect the output over a TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket to a server application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But perhaps there is an easier way, or something like this alread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does exist?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For C I use a printf wrapper function that writes the output to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logfile. I derive the name of the logfile from the mpi_id. It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prefixes the lines with a time-stamp, so you also get some basic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; profile information. I can send you the source code if you like.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gijsbert
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; FORTRAN?
</span><br>
<span class="quotelev1">&gt; The syntactically incorrect statement &quot;DO 10 I = 1.10&quot; will parse and
</span><br>
<span class="quotelev1">&gt; generate code creating a variable, DO10I, as follows: &quot;DO10I =  
</span><br>
<span class="quotelev1">&gt; 1.10&quot;  If that
</span><br>
<span class="quotelev1">&gt; doesn't terrify you, it should.
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
<li><strong>Next message:</strong> <a href="7834.php">Jeff Squyres: "[OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7832.php">Douglas Guptill: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7832.php">Douglas Guptill: "Re: [OMPI users] Handling output of processes"</a>
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
