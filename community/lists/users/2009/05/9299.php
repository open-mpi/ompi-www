<?
$subject_val = "Re: [OMPI users] mpirun fails on remote applications";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 05:26:02 2009" -->
<!-- isoreceived="20090512092602" -->
<!-- sent="Tue, 12 May 2009 12:30:30 +0300" -->
<!-- isosent="20090512093030" -->
<!-- name="Micha Feigin" -->
<!-- email="michf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails on remote applications" -->
<!-- id="20090512123030.46cf2f90_at_hubert.tau.ac.il" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990905120154vb51653eyba03b28f3ca060d0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails on remote applications<br>
<strong>From:</strong> Micha Feigin (<em>michf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 05:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9300.php">feng chen: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Previous message:</strong> <a href="9298.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9298.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9300.php">feng chen: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9300.php">feng chen: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 12 May 2009 11:54:57 +0300
<br>
Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; sounds like firewall problems to or from anfield04.
</span><br>
<span class="quotelev1">&gt; Lenny,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 12, 2009 at 8:18 AM, feng chen &lt;fch6699_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm having a similar problem, not sure if it's related (gave up for the moment
<br>
on 1.3+ openmpi, 1.2.8 works fine nothing above that).
<br>
<p>1. Try taking down the firewall and see if it works
<br>
2. Make sure that passwordless ssh is working (not sure if it's needed for all
<br>
things but still ...)
<br>
3. can you test it maybe with openmpi 1.2.8?
<br>
4. also, does posting the job in the other direction work? (4 -&gt; 5 instead of 5 -&gt; 4)
<br>
[fch6699_at_anfield04 test]$ mpirun -host anfield05 -np 4 ./hello
<br>
<p><span class="quotelev1">&gt;From what it seems on my cluster for my specific problem is that machines have
</span><br>
different addresses based on which machine you are connecting from (they are
<br>
connected directly to each other, not through a switch with a central name
<br>
server), and name lookup seems to happen on the master instead of the client
<br>
node so it is getting the wrong address.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt;  hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First of all,i'm new to openmpi. So i don't know much about mpi setting.
</span><br>
<span class="quotelev2">&gt; &gt; That's why i'm following manual and FAQ suggestions from the beginning.
</span><br>
<span class="quotelev2">&gt; &gt; Everything went well untile i try to run a pllication on a remote node by
</span><br>
<span class="quotelev2">&gt; &gt; using 'mpirun -np' command. It just hanging there without doing anything, no
</span><br>
<span class="quotelev2">&gt; &gt; error messanges, no
</span><br>
<span class="quotelev2">&gt; &gt; complaining or whatsoever. What confused me is that i can run application
</span><br>
<span class="quotelev2">&gt; &gt; over ssh with no problem, while it comes to mpirun, just stuck in there does
</span><br>
<span class="quotelev2">&gt; &gt; nothing.
</span><br>
<span class="quotelev2">&gt; &gt; I'm pretty sure i got everyting setup in the right way manner, including no
</span><br>
<span class="quotelev2">&gt; &gt; password signin over ssh, environment variables for bot interactive and
</span><br>
<span class="quotelev2">&gt; &gt; non-interactive logons.
</span><br>
<span class="quotelev2">&gt; &gt; A sample list of commands been used list as following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  [fch6699_at_anfield05 test]$ mpicc -o hello hello.f
</span><br>
<span class="quotelev2">&gt; &gt; [fch6699_at_anfield05 test]$ ssh anfield04 ./hello
</span><br>
<span class="quotelev2">&gt; &gt; 0 of 1: Hello world!
</span><br>
<span class="quotelev2">&gt; &gt; [fch6699_at_anfield05 test]$ mpirun -host anfield05 -np 4 ./hello
</span><br>
<span class="quotelev2">&gt; &gt; 0 of 4: Hello world!
</span><br>
<span class="quotelev2">&gt; &gt; 2 of 4: Hello world!
</span><br>
<span class="quotelev2">&gt; &gt; 3 of 4: Hello world!
</span><br>
<span class="quotelev2">&gt; &gt; 1 of 4: Hello world!
</span><br>
<span class="quotelev2">&gt; &gt; [fch6699_at_anfield05 test]$ mpirun -host anfield04 -np 4 ./hello
</span><br>
<span class="quotelev2">&gt; &gt; just hanging there for years!!!
</span><br>
<span class="quotelev2">&gt; &gt; need help to fix this !!
</span><br>
<span class="quotelev2">&gt; &gt; if u try it in another way
</span><br>
<span class="quotelev2">&gt; &gt; [fch6699_at_anfield05 test]$ mpirun -hostfile my_hostfile -np 4 ./hell
</span><br>
<span class="quotelev2">&gt; &gt; still nothing happened, no warnnings, no complains, no error messages.. !!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All other files related to this issue can be found in my_files.tar.gz in
</span><br>
<span class="quotelev2">&gt; &gt; attachment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; .cshrc
</span><br>
<span class="quotelev2">&gt; &gt; The output of the &quot;ompi_info --all&quot; command.
</span><br>
<span class="quotelev2">&gt; &gt; my_hostfile
</span><br>
<span class="quotelev2">&gt; &gt; hello.c
</span><br>
<span class="quotelev2">&gt; &gt; output of iptables
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only thing i've noticed is that the port of our ssh has been changed
</span><br>
<span class="quotelev2">&gt; &gt; from 22 to other number for security issues.
</span><br>
<span class="quotelev2">&gt; &gt; Don't know will that have anything to with it or not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help will be highly appreciated!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks in advance!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kevin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9300.php">feng chen: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Previous message:</strong> <a href="9298.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9298.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9300.php">feng chen: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9300.php">feng chen: "Re: [OMPI users] mpirun fails on remote applications"</a>
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
