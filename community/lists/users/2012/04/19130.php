<?
$subject_val = "Re: [OMPI users] regarding the problem occurred while running anmpi programs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:49:41 2012" -->
<!-- isoreceived="20120425154941" -->
<!-- sent="Wed, 25 Apr 2012 09:49:17 -0600" -->
<!-- isosent="20120425154917" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] regarding the problem occurred while running anmpi programs" -->
<!-- id="4F981CFD.7090004_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJ_xm3BbpMWcf8vCxG+ggdUJERKzA0mcnrKU_g2ZUQ8TbZYCvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] regarding the problem occurred while running anmpi programs<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 11:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19131.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<li><strong>In reply to:</strong> <a href="19128.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, but what happens when you run a remote, non-login shell?  By that,
<br>
I mean something like this:
<br>
<p>ssh master_at_ip-10-80-106-70 'echo $LD_LIBRARY_PATH'
<br>
<p>Assuming I got the syntax right, I suspect you'll find that the contents
<br>
of the variable, do not include /usr/local/openmpi-1.4.5/lib.
<br>
<p>You really need that to be in LD_LIBRARY_PATH (or some other method) on
<br>
all nodes, in all shells for the user.  One simple way to do this is via
<br>
the startup files (eg. .bashrc and .bash_profile for bash, .cshrc for
<br>
csh/tcsh, etc.)
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 04/25/2012 09:43 AM, seshendra seshu wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I have exported the library files as below
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [master_at_ip-10-80-106-70 ~]$ export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.4.5/lib:$LD_LIBRARY_PATH                                                                       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [master_at_ip-10-80-106-70 ~]$ mpirun --prefix /usr/local/openmpi-1.4.5 -n
</span><br>
<span class="quotelev1">&gt; 1 --hostfile hostfile out
</span><br>
<span class="quotelev1">&gt; out: error while loading shared libraries: libmpi_cxx.so.0: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; [master_at_ip-10-80-106-70 ~]$ mpirun --prefix /usr/local/lib/ -n 1
</span><br>
<span class="quotelev1">&gt; --hostfile hostfile
</span><br>
<span class="quotelev1">&gt; out                                                                               
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; out: error while loading shared libraries: libmpi_cxx.so.0: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But still iam getting the same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 25, 2012 at 5:36 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     See the FAQ item I cited. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Apr 25, 2012, at 11:24 AM, &quot;seshendra seshu&quot; &lt;seshu199_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:seshu199_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Hi
</span><br>
<span class="quotelev2">&gt;&gt;     now i have created an used and tried to run the program but i got
</span><br>
<span class="quotelev2">&gt;&gt;     the following error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [master_at_ip-10-80-106-70 ~]$ mpirun -n 1 --hostfile hostfile
</span><br>
<span class="quotelev2">&gt;&gt;     out                                                                                                        
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     out: error while loading shared libraries: libmpi_cxx.so.0: cannot
</span><br>
<span class="quotelev2">&gt;&gt;     open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     thanking you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Wed, Apr 25, 2012 at 5:12 PM, Jeff Squyres &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Apr 25, 2012, at 11:06 AM, seshendra seshu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; so should i need to create an user and run the mpi program.
</span><br>
<span class="quotelev2">&gt;&gt;         or how can i run in cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         It is a &quot;best practice&quot; to not run real applications as root
</span><br>
<span class="quotelev2">&gt;&gt;         (e.g., MPI applications).  Create a non-privlidged user to run
</span><br>
<span class="quotelev2">&gt;&gt;         your applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Then be sure to set your LD_LIBRARY_PATH if you installed Open
</span><br>
<span class="quotelev2">&gt;&gt;         MPI into a non-system-default location.  See this FAQ item:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          
</span><br>
<span class="quotelev2">&gt;&gt;          <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;      WITH REGARDS
</span><br>
<span class="quotelev2">&gt;&gt;     M.L.N.Seshendra
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19131.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<li><strong>In reply to:</strong> <a href="19128.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
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
