<?
$subject_val = "Re: [OMPI users] regarding the problem occurred while running anmpi programs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 12:16:05 2012" -->
<!-- isoreceived="20120425161605" -->
<!-- sent="Wed, 25 Apr 2012 12:16:00 -0400" -->
<!-- isosent="20120425161600" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] regarding the problem occurred while running anmpi programs" -->
<!-- id="7685B4A9-9C8D-4F05-A5B4-590B3CA34891_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3A03LHD3DvppoGYecM9D_DW=PrthUQsvvJxcUQohc_u4A_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 12:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19132.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19132.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19137.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Reply:</strong> <a href="19137.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would really suggest doing a little reading in the FAQ.  It talks about setting up ssh keys, etc.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
<br>
<p><p>On Apr 25, 2012, at 12:03 PM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Thanks its has worked but when i tried to run for a 2 nodes , i have got the following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [master_at_ip-10-80-106-70 ~]$ mpirun -n 2 --hostfile hostfile out
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-with-mic).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 9923) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [master_at_ip-10-80-106-70 ~]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so please help me in solving this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanking you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 25, 2012 at 5:48 PM, tyler.balson_at_[hidden] &lt;tyler.balson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH= [location of library] leave out the :$LD_LIBRARY_PATH 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of seshendra seshu [seshu199_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 25, 2012 10:43 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] regarding the problem occurred while running anmpi programs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi 
</span><br>
<span class="quotelev1">&gt; I have exported the library files as below
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [master_at_ip-10-80-106-70 ~]$ export LD_LIBRARY_PATH=/usr/local/openmpi-1.4.5/lib:$LD_LIBRARY_PATH                                                                        
</span><br>
<span class="quotelev1">&gt; [master_at_ip-10-80-106-70 ~]$ mpirun --prefix /usr/local/openmpi-1.4.5 -n 1 --hostfile hostfile out
</span><br>
<span class="quotelev1">&gt; out: error while loading shared libraries: libmpi_cxx.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; [master_at_ip-10-80-106-70 ~]$ mpirun --prefix /usr/local/lib/ -n 1 --hostfile hostfile out                                                                                
</span><br>
<span class="quotelev1">&gt; out: error while loading shared libraries: libmpi_cxx.so.0: cannot open shared object file: No such file or directory
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
<span class="quotelev1">&gt; On Wed, Apr 25, 2012 at 5:36 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; See the FAQ item I cited. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2012, at 11:24 AM, &quot;seshendra seshu&quot; &lt;seshu199_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi 
</span><br>
<span class="quotelev2">&gt;&gt; now i have created an used and tried to run the program but i got the following error
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [master_at_ip-10-80-106-70 ~]$ mpirun -n 1 --hostfile hostfile out                                                                                                         
</span><br>
<span class="quotelev2">&gt;&gt; out: error while loading shared libraries: libmpi_cxx.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanking you
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Apr 25, 2012 at 5:12 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2012, at 11:06 AM, seshendra seshu wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; so should i need to create an user and run the mpi program. or how can i run in cluster
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is a &quot;best practice&quot; to not run real applications as root (e.g., MPI applications).  Create a non-privlidged user to run your applications.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then be sure to set your LD_LIBRARY_PATH if you installed Open MPI into a non-system-default location.  See this FAQ item:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;  WITH REGARDS
</span><br>
<span class="quotelev2">&gt;&gt; M.L.N.Seshendra
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19132.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19132.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19137.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Reply:</strong> <a href="19137.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
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
