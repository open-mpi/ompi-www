<?
$subject_val = "Re: [OMPI users] mpirun fails on remote applications";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 04:55:02 2009" -->
<!-- isoreceived="20090512085502" -->
<!-- sent="Tue, 12 May 2009 11:54:57 +0300" -->
<!-- isosent="20090512085457" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails on remote applications" -->
<!-- id="453d39990905120154vb51653eyba03b28f3ca060d0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="375049.35098.qm_at_web53604.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 04:54:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Previous message:</strong> <a href="9297.php">Matthieu Brucher: "[OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="9294.php">feng chen: "[OMPI users] mpirun fails on remote applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sounds like firewall problems to or from anfield04.
<br>
Lenny,
<br>
<p>On Tue, May 12, 2009 at 8:18 AM, feng chen &lt;fch6699_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all,i'm new to openmpi. So i don't know much about mpi setting.
</span><br>
<span class="quotelev1">&gt; That's why i'm following manual and FAQ suggestions from the beginning.
</span><br>
<span class="quotelev1">&gt; Everything went well untile i try to run a pllication on a remote node by
</span><br>
<span class="quotelev1">&gt; using 'mpirun -np' command. It just hanging there without doing anything, no
</span><br>
<span class="quotelev1">&gt; error messanges, no
</span><br>
<span class="quotelev1">&gt; complaining or whatsoever. What confused me is that i can run application
</span><br>
<span class="quotelev1">&gt; over ssh with no problem, while it comes to mpirun, just stuck in there does
</span><br>
<span class="quotelev1">&gt; nothing.
</span><br>
<span class="quotelev1">&gt; I'm pretty sure i got everyting setup in the right way manner, including no
</span><br>
<span class="quotelev1">&gt; password signin over ssh, environment variables for bot interactive and
</span><br>
<span class="quotelev1">&gt; non-interactive logons.
</span><br>
<span class="quotelev1">&gt; A sample list of commands been used list as following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [fch6699_at_anfield05 test]$ mpicc -o hello hello.f
</span><br>
<span class="quotelev1">&gt; [fch6699_at_anfield05 test]$ ssh anfield04 ./hello
</span><br>
<span class="quotelev1">&gt; 0 of 1: Hello world!
</span><br>
<span class="quotelev1">&gt; [fch6699_at_anfield05 test]$ mpirun -host anfield05 -np 4 ./hello
</span><br>
<span class="quotelev1">&gt; 0 of 4: Hello world!
</span><br>
<span class="quotelev1">&gt; 2 of 4: Hello world!
</span><br>
<span class="quotelev1">&gt; 3 of 4: Hello world!
</span><br>
<span class="quotelev1">&gt; 1 of 4: Hello world!
</span><br>
<span class="quotelev1">&gt; [fch6699_at_anfield05 test]$ mpirun -host anfield04 -np 4 ./hello
</span><br>
<span class="quotelev1">&gt; just hanging there for years!!!
</span><br>
<span class="quotelev1">&gt; need help to fix this !!
</span><br>
<span class="quotelev1">&gt; if u try it in another way
</span><br>
<span class="quotelev1">&gt; [fch6699_at_anfield05 test]$ mpirun -hostfile my_hostfile -np 4 ./hell
</span><br>
<span class="quotelev1">&gt; still nothing happened, no warnnings, no complains, no error messages.. !!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All other files related to this issue can be found in my_files.tar.gz in
</span><br>
<span class="quotelev1">&gt; attachment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .cshrc
</span><br>
<span class="quotelev1">&gt; The output of the &quot;ompi_info --all&quot; command.
</span><br>
<span class="quotelev1">&gt; my_hostfile
</span><br>
<span class="quotelev1">&gt; hello.c
</span><br>
<span class="quotelev1">&gt; output of iptables
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only thing i've noticed is that the port of our ssh has been changed
</span><br>
<span class="quotelev1">&gt; from 22 to other number for security issues.
</span><br>
<span class="quotelev1">&gt; Don't know will that have anything to with it or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help will be highly appreciated!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kevin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9298/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Previous message:</strong> <a href="9297.php">Matthieu Brucher: "[OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="9294.php">feng chen: "[OMPI users] mpirun fails on remote applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9299.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
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
