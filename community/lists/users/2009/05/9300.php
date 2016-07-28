<?
$subject_val = "Re: [OMPI users] mpirun fails on remote applications";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 06:04:37 2009" -->
<!-- isoreceived="20090512100437" -->
<!-- sent="Tue, 12 May 2009 03:04:32 -0700 (PDT)" -->
<!-- isosent="20090512100432" -->
<!-- name="feng chen" -->
<!-- email="fch6699_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails on remote applications" -->
<!-- id="763277.79428.qm_at_web53602.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20090512123030.46cf2f90_at_hubert.tau.ac.il" -->
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
<strong>From:</strong> feng chen (<em>fch6699_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 06:04:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9301.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>Previous message:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9312.php">Jeff Squyres: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9312.php">Jeff Squyres: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks a lot. firewall it is.. It works with firewall's off, while that brings another questions from me. Is there anyway we can run mpirun while firwall 's on? If yes, how do we setup firewall or iptables? 

thank you




________________________________
From: Micha Feigin &lt;michf_at_[hidden]&gt;
To: users_at_[hidden]
Sent: Tuesday, May 12, 2009 4:30:30 AM
Subject: Re: [OMPI users] mpirun fails on remote applications

On Tue, 12 May 2009 11:54:57 +0300
Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:

&gt; sounds like firewall problems to or from anfield04.
&gt; Lenny,
&gt; 
&gt; On Tue, May 12, 2009 at 8:18 AM, feng chen &lt;fch6699_at_[hidden]&gt; wrote:
&gt;

I'm having a similar problem, not sure if it's related (gave up for the moment
on 1.3+ openmpi, 1.2.8 works fine nothing above that).

1. Try taking down the firewall and see if it works
2. Make sure that passwordless ssh is working (not sure if it's needed for all
things but still ...)
3. can you test it maybe with openmpi 1.2.8?
4. also, does posting the job in the other direction work? (4 -&gt; 5 instead of 5 -&gt; 4)
[fch6699_at_anfield04 test]$ mpirun -host anfield05 -np 4 ./hello

&gt;From what it seems on my cluster for my specific problem is that machines have
different addresses based on which machine you are connecting from (they are
connected directly to each other, not through a switch with a central name
server), and name lookup seems to happen on the master instead of the client
node so it is getting the wrong address.

&gt; &gt;&#160; hi all,
&gt; &gt;
&gt; &gt; First of all,i'm new to openmpi. So i don't know much about mpi setting.
&gt; &gt; That's why i'm following manual and FAQ suggestions from the beginning.
&gt; &gt; Everything went well untile i try to run a pllication on a remote node by
&gt; &gt; using 'mpirun -np' command. It just hanging there without doing anything, no
&gt; &gt; error messanges, no
&gt; &gt; complaining or whatsoever. What confused me is that i can run application
&gt; &gt; over ssh with no problem, while it comes to mpirun, just stuck in there does
&gt; &gt; nothing.
&gt; &gt; I'm pretty sure i got everyting setup in the right way manner, including no
&gt; &gt; password signin over ssh, environment variables for bot interactive and
&gt; &gt; non-interactive logons.
&gt; &gt; A sample list of commands been used list as following:
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;&#160; [fch6699_at_anfield05 test]$ mpicc -o hello hello.f
&gt; &gt; [fch6699_at_anfield05 test]$ ssh anfield04 ./hello
&gt; &gt; 0 of 1: Hello world!
&gt; &gt; [fch6699_at_anfield05 test]$ mpirun -host anfield05 -np 4 ./hello
&gt; &gt; 0 of 4: Hello world!
&gt; &gt; 2 of 4: Hello world!
&gt; &gt; 3 of 4: Hello world!
&gt; &gt; 1 of 4: Hello world!
&gt; &gt; [fch6699_at_anfield05 test]$ mpirun -host anfield04 -np 4 ./hello
&gt; &gt; just hanging there for years!!!
&gt; &gt; need help to fix this !!
&gt; &gt; if u try it in another way
&gt; &gt; [fch6699_at_anfield05 test]$ mpirun -hostfile my_hostfile -np 4 ./hell
&gt; &gt; still nothing happened, no warnnings, no complains, no error messages.. !!
&gt; &gt;
&gt; &gt; All other files related to this issue can be found in my_files.tar.gz in
&gt; &gt; attachment.
&gt; &gt;
&gt; &gt; .cshrc
&gt; &gt; The output of the &quot;ompi_info --all&quot; command.
&gt; &gt; my_hostfile
&gt; &gt; hello.c
&gt; &gt; output of iptables
&gt; &gt;
&gt; &gt; The only thing i've noticed is that the port of our ssh has been changed
&gt; &gt; from 22 to other number for security issues.
&gt; &gt; Don't know will that have anything to with it or not.
&gt; &gt;
&gt; &gt;
&gt; &gt; Any help will be highly appreciated!!
&gt; &gt;
&gt; &gt; thanks in advance!
&gt; &gt;
&gt; &gt; Kevin
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>



      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9300/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9301.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>Previous message:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>In reply to:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9312.php">Jeff Squyres: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9312.php">Jeff Squyres: "Re: [OMPI users] mpirun fails on remote applications"</a>
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
