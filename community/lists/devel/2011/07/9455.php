<?
$subject_val = "Re: [OMPI devel] Question about hanging mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 16:39:27 2011" -->
<!-- isoreceived="20110701203927" -->
<!-- sent="Fri, 1 Jul 2011 20:37:40 +0000" -->
<!-- isosent="20110701203740" -->
<!-- name="Colon, Joseanibal" -->
<!-- email="joseanibal.colon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about hanging mpirun" -->
<!-- id="21316B765A6B9D46A5CCE36DDD1199C26EE2268C4E_at_GVW1339EXA.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B092955B-7F5A-4EAB-A310-986BFDBAFCD3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about hanging mpirun<br>
<strong>From:</strong> Colon, Joseanibal (<em>joseanibal.colon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-01 16:37:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9456.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>In reply to:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9456.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Reply:</strong> <a href="9456.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got the LD_LIBRARY_PATH correct and I don't have other installations on the target machine, but it doesn't fix it. I had the suspicion about &quot;./configure&quot; building support for stuff on my machine that is not available on the target machine. Unfortunately the machines are not exactly identical, definitely in terms of hardware. The only similarities are the OS and the x86_64 architecture (this is OpenSUSE 11, SP1).
<br>
As you correctly guessed I want to run this on a single machine, and all processes are local. There is some intercommunication going on as well, but all using MPI API. I am guessing that my problem has to do with intercommunications (since strace shows infinite calls to 'poll()'), probably because mpirun is trying to use features that were configured on my machine but not present on the target. Does that make sense?
<br>
I figured I don't need any fancy support to just run a couple of processes in parallel locally.  What would be the most basic configuration I can use to ensure that this will run on my target machine? (a machine that probably doesn't have support for a lot of the components - no IB devices found). I want openmpi to use the simplest form available. Thanks!
<br>
<p>-Joseanibal
<br>
<p><p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Friday, July 01, 2011 3:50 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Question about hanging mpirun
<br>
<p>Make sure your LD_LIBRARY_PATH will pickup this installation before anything else - it's possible it is picking up an old one.
<br>
<p>I take it that you are running this on a single machine? So all the procs are local?
<br>
<p>Only other issue is that OMPI's configure does a lot of testing to detect the local environment. So you might be building support for things that aren't on your target machine, and vice versa. If you have to do it this way, you need to ensure that the two machines are absolutely identical, both in hardware and software (watch for those installed packages!).
<br>
<p><p>On Jul 1, 2011, at 10:42 AM, Colon, Joseanibal wrote:
<br>
<p><p>My mpi application is hanging forever when called with mpirun -np &gt;1 (that is 2 or more... not actually typing the '&gt;').
<br>
<p>So I built openmpi 1.4.3 with default options except I used -prefix=/usr/local/openmpi. I compiled an application against it but I need to run this application elsewhere. So brought in my entire installation directory /usr/local/openmpi to this new machine along with my binary to test it. Ran the following command... (If i did't use the -mca options it would print out messages about missing OpenFrabric):
<br>
/usr/local/openmpi/bin/mpirun --mca btl tcp,self -np 2 ./my_application
<br>
<p>This actually works for -np 1. But requesting another process makes the call hang forever. 'strace' of the above call shows an never ending calls to &quot;poll&quot; resulting in (timeout) every time.
<br>
Executing /usr/local/openmpi/bin/ompi_info still shows the configure and build host as the machine I built on, but I don't know if this may cause a problem. I also see &quot;Thread support: posix (mpi: no, progress: no)&quot;
<br>
<p>Unfortunately I need to do it this way.. I cannot build openmpi on the target machine, so I need to make it portable. This other machine should be the same architecture and OS and everything.
<br>
<p>I should have solved this yesterday, please help, and thanks!
<br>
<p>-Joseanibal
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9455/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9456.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>In reply to:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9456.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Reply:</strong> <a href="9456.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
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
