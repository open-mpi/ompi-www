<?
$subject_val = "Re: [OMPI devel] New MOSIX components draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 31 15:58:01 2012" -->
<!-- isoreceived="20120331195801" -->
<!-- sent="Sat, 31 Mar 2012 22:57:53 +0300" -->
<!-- isosent="20120331195753" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New MOSIX components draft" -->
<!-- id="4F7761C1.1030504_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59009E45-0F14-47FB-885B-BB2A95E0BAFC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New MOSIX components draft<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-31 15:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10795.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10795.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MOSIX works as a sandbox, wrapping the executed process. Suppose I run 
<br>
with &quot;-n 3&quot;: three processes will be launched via MOSIX on nodes A, B 
<br>
and C. MOSIX can choose to &quot;migrate&quot; process #2 from B to D - this will 
<br>
not restart the process, nor will the process know about it's current 
<br>
location unless it &quot;asks&quot; by reading  /proc/mosix/mosip for example. The 
<br>
process will run on D (and consume CPU and memory on D), but it'll think 
<br>
it's still on B and most system-calls will still be executed on B. This 
<br>
is, of course, better for CPU-intensive apps then i/o-intensive ones... 
<br>
Since MPI would qualify as &quot;communication-intensive&quot;, I've prepared a 
<br>
special BTL component for it. You don't have to use the BTL to run with 
<br>
MOSIX - ODLS is enough, but it'll give you reduced communication 
<br>
performance. MPI runs as usual (with the slight performance penalty) - 
<br>
no processes added/removed so no re-wiring...
<br>
<p>I'll be happy to elaborate if you're interested.
<br>
<p>On 03/31/2012 10:29 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I can't speak to the BTL itself, but I do have questions as to how this can work. If MOSIX migrates a process, or starts new processes on another node during the course of a job, there is no way for MPI to handle the wireup and so it will fail. We need ALL the procs started at the beginning of time, and for them to remain in their initial location throughout the job. There are people working on how to handle proc movement, but mostly from a fault recovery perspective - i.e., the process is already  known and wired, but fails and restarts at a new location, so we can try to re-wire it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've looked at MOSIX before for other folks (easy enough to fork/exec a proc), but could find no real way to support the way MOSIX wants to manage resources without the constraint that MOSIX only operate at a job level - i.e., it start all specified procs at the beginning of time, and it not migrate them. Kinda defeated the intent of MOSIX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2012, at 10:04 AM, Alex Margolin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think i'm close to finishing an initial version of the MOSIX support for open-mpi. A perliminary draft is attached.
</span><br>
<span class="quotelev2">&gt;&gt; The support consists of two modules: ODLS module for launching processes under MOSIX, and BTL module for efficient communication between processes.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not quite there yet - I'm sure the BTL module needs more work... first because it fails (see error output below) and second because I'm not sure I got all the function output right. I've written some documentation inside the code, which is pretty short at the moment. The ODLS component is working fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible someone will take a look at my code to see if i'm in the right direction? I would like to submit my code to the repository eventually... I know of quite a few open-mpi users interested in MOSIX support (they know I'm working on it), and I was hoping to publish some benchmark results for it at the upcoming EuroMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10795.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="10793.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10795.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
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
