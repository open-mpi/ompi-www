<?
$subject_val = "Re: [OMPI users] Problem with 'orted: command not found'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 21:19:06 2016" -->
<!-- isoreceived="20160503011906" -->
<!-- sent="Tue, 3 May 2016 01:19:03 +0000" -->
<!-- isosent="20160503011903" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with 'orted: command not found'" -->
<!-- id="5FB022AB-80DB-491F-96D6-B0695F5E82D0_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAKgXT3D1zUn=Et1HJ7d4qJu4WxFKQOLqoM0-x6NVkO1xyWHObA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with 'orted: command not found'<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 21:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29072.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Previous message:</strong> <a href="29070.php">Maciek Lewi&#197;&#132;ski: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>In reply to:</strong> <a href="29070.php">Maciek Lewi&#197;&#132;ski: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29073.php">Maciek Lewiński: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Reply:</strong> <a href="29073.php">Maciek Lewiński: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make sure you check that these paths are set for *non-interactive* logins.
<br>

<br>

<br>
<span class="quotelev1">&gt; On May 2, 2016, at 6:14 PM, Maciek Lewi&#197;&#132;ski &lt;macieklewinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I already had correct paths in .bashrc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/lib/lightdm/lightdm:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/bin:/usr/local/bin:/home/$USER/.openmpi/bin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=:/usr/local/lib:/usr/local/lib:/home/$USER/.openmpi/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run mpi normally from slave1 so I'm sure they work. I also exported these paths in .profile just to be sure a moment before but it didn't work. Still the same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-05-02 23:40 GMT+02:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; The key is this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: you need to set your PATH and LD_LIBRARY_PATH properly for non-interactive logins.  See <a href="https://www.open-mpi.org/faq/?category=running#adding-ompi-to-path.">https://www.open-mpi.org/faq/?category=running#adding-ompi-to-path.</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 2, 2016, at 5:36 PM, Maciek Lewi&#197;&#132;ski &lt;macieklewinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, I'm having problem with Open MPI version 1.10.2.
</span><br>
<span class="quotelev2">&gt; &gt; I've installed two virtual machines on VirtualBox, both are the same images of Ubuntu 12.04 64bit.
</span><br>
<span class="quotelev2">&gt; &gt; Both have the same accounts, both have everything configured almost exactly the same.
</span><br>
<span class="quotelev2">&gt; &gt; I have configured OMPI only with the --prefix to specify my location of install folder which is /home/$USER/.openmpi.
</span><br>
<span class="quotelev2">&gt; &gt; Users on both machines are identical.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On both machines running mpirun on one of the example programs work perfectly, on both machines I've added bin and lib to corresponding PATHs, env command ran on master and through ssh on slave1 gives these results:
</span><br>
<span class="quotelev2">&gt; &gt; osboxes_at_osboxes:~/cloud$ env | grep PATH
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=:/usr/local/lib:/usr/local/lib:/home/osboxes/.openmpi/lib
</span><br>
<span class="quotelev2">&gt; &gt; PATH=/usr/lib/lightdm/lightdm:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/bin:/usr/local/bin:/home/osboxes/.openmpi/bin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On both hosts I have installed ssh which works, I've enabled passwordless connection, which again, works,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have created an NFS folder in which I hold the hello_c program from examples and hosts file that looks like this:
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.191    master
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.190    slave1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same two lines are placed in /etc/hosts for ssh to work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On both machines, running:
</span><br>
<span class="quotelev2">&gt; &gt; osboxes_at_osboxes:~/cloud$ mpirun -np 1 ./hello_c
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI osboxes_at_osboxes Distribution, ident: 1.10.2, repo rev: v1.10.1-145-g799148f, Jan 21, 2016, 126)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Works, even running this command on slave1 through ssh from master works as expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yet when I try to execute the following command I get the error:
</span><br>
<span class="quotelev2">&gt; &gt; osboxes_at_osboxes:~/cloud$ mpirun -np 2 --hostfile hosts ./hello_c
</span><br>
<span class="quotelev2">&gt; &gt; bash: orted: command not found
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev2">&gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev2">&gt; &gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev2">&gt; &gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev2">&gt; &gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev2">&gt; &gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev2">&gt; &gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev2">&gt; &gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev2">&gt; &gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev2">&gt; &gt;   and network routing requirements).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same happens when I use -host master,slave1 instead of --hostfile hosts. I'm slowly running out if ideas, I've tried anything I could find on the internet or OMPI FAQ, nothing seems to work. What am I doing wrong?
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29068.php">http://www.open-mpi.org/community/lists/users/2016/05/29068.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29069.php">http://www.open-mpi.org/community/lists/users/2016/05/29069.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29070.php">http://www.open-mpi.org/community/lists/users/2016/05/29070.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29072.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Previous message:</strong> <a href="29070.php">Maciek Lewi&#197;&#132;ski: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>In reply to:</strong> <a href="29070.php">Maciek Lewi&#197;&#132;ski: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29073.php">Maciek Lewiński: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Reply:</strong> <a href="29073.php">Maciek Lewiński: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
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
