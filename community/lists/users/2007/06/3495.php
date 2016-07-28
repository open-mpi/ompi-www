<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 07:23:27 2007" -->
<!-- isoreceived="20070614112327" -->
<!-- sent="Thu, 14 Jun 2007 19:23:17 +0800" -->
<!-- isosent="20070614112317" -->
<!-- name="lichanjuan04_at_[hidden]" -->
<!-- email="lichanjuan04_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't run parallel job on cluster" -->
<!-- id="1181820197.6692.2.camel_at_localhost.localdomain" -->
<!-- inreplyto="BD0B564E-8AB7-4D6A-B205-67B0D8201201_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:lichanjuan04_at_[hidden]?Subject=Re:%20[OMPI%20users]%20can't%20run%20parallel%20job%20on%20cluster"><em>lichanjuan04_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-06-14 07:23:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3496.php">Allen Barnett: "[OMPI users] Thanks"</a>
<li><strong>Previous message:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
<li><strong>In reply to:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your help, I solved my problem. I make a stupid mistake,I
<br>
just modify .bash_profile before, I modify .bashrc, it works. so stupid
<br>
I am.
<br>
anyway,thanks your reply.
<br>
On Thu, 2007-06-14 at 07:10 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; You have two options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Ensure that your PATH and LD_LIBRARY_PATH are exactly what you  
</span><br>
<span class="quotelev1">&gt; think they are on the remote nodes.  A common problem that some  
</span><br>
<span class="quotelev1">&gt; people run into is that they setup their PATH/LD_LIBRARY_PATH in the  
</span><br>
<span class="quotelev1">&gt; &quot;interactive&quot; portions of their .bashrc, meaning that they are only  
</span><br>
<span class="quotelev1">&gt; set for interactive logins (and therefore not set for non-interactive  
</span><br>
<span class="quotelev1">&gt; logins).  Try the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	ssh othernode 'echo $PATH'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the single quotes; they are necessary to ensure that &quot;echo  
</span><br>
<span class="quotelev1">&gt; $PATH&quot; is evaluated on the *remote* node.  Do the same with  
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH and ensure that they are really set to the values  
</span><br>
<span class="quotelev1">&gt; that you think they are.  Check out the following FAQ entry:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Use the --prefix functionality in mpirun to automatically set the  
</span><br>
<span class="quotelev1">&gt; PATH / LD_LIBRARY_PATH values for the remote node.  Check out this  
</span><br>
<span class="quotelev1">&gt; FAQ entry:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that a synonym to the --prefix functionality that is not [yet]  
</span><br>
<span class="quotelev1">&gt; mentioned in that FAQ entry is that you can use the absolute pathname  
</span><br>
<span class="quotelev1">&gt; to mpirun.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      /path/to/mpirun ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or you can use OMPI 1.2's --enable-mpirun-prefix-by-default option to  
</span><br>
<span class="quotelev1">&gt; OMPI's configure, which will tell mpirun to always assume that it  
</span><br>
<span class="quotelev1">&gt; needs to use --prefix-like behavior (without you needing to specify  
</span><br>
<span class="quotelev1">&gt; it on the mpirun command line).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2007, at 11:58 PM, lichanjuan04_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2007-06-13 at 11:47 +0800, lichanjuan04_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hi,all:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     I am a first user of openmpi, I have used mpich before.I found  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; there
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are many differenties between them.So I am confused.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         I build openmpi on a ps3 using default option,that is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           $ ./configure --prefiex=
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           $ make all install
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         I modify my .bash_profile file and add openmpi lib and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         executable file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         in LD_LIBRARY_PATH and PATH.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         I use NFS file system between server and node, I just install
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         openmpi on
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         server.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         I check the mailling list and FAQ, knowing default lancher is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         ssh,but I
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         sitll add &quot;pls_rsh_agent = ssh&quot; in openmpi-mca-params.conf.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         I test the hello_c.c example. when I run:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 $mpiexec -host ps3-2 -n 4 ./hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         it can run correctly(ps3-2 is hostname of server).I try it on
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         each node.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         but when I run:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 $ mpiexec -hostfile host.txt -n 4 ./hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         content of host.txt:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         ps3-1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         ps3-2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         there is error message:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         bash: orted: command not found
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         pls_rsh_module.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         at line 1164
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         errmgr_hnp.c at
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         line 90
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         [ps3-1:25154] ERROR: A daemon on node ps3-2 failed to  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; start as
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         expected.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         [ps3-1:25154] ERROR: There may be more information available
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         from
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         [ps3-1:25154] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         [ps3-1:25154] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; status
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         127.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         pls_rsh_module.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         at line 1196
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         mpiexec was unable to cleanly terminate the daemons for this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         job.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         I search the same problem in mailing list and FAQ, saying  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PATH
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         LD_LIBRARY_PATH are not setted correctly,but I ensure them  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in my
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         path.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         I use openmpi in first time, so hope anybody help me,thanks a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         lot!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; sorry, I forget some information. I use openmpi1.2, I try to run the
</span><br>
<span class="quotelev2">&gt; &gt; command on remote host such as ,run command on ps3-1:
</span><br>
<span class="quotelev2">&gt; &gt; 	$ mpiexec -host ps3-2 -n 2 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; there appear same error message.I think there is something wrong with
</span><br>
<span class="quotelev2">&gt; &gt; rsh/ssh,but I don't where to modify or some file I missed.
</span><br>
<span class="quotelev2">&gt; &gt; if someone met same problem,please tell me the solution. I will be
</span><br>
<span class="quotelev2">&gt; &gt; grateful. thanks very much!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 					Li chanjuan
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Li, Chanjuan                                        Lanzhou University
</span><br>
<span class="quotelev2">&gt; &gt; Distributed &amp; Embedded System Lab              <a href="http://dslab.lzu.edu.cn">http://dslab.lzu.edu.cn</a>
</span><br>
<span class="quotelev2">&gt; &gt; School of Information Science and Engeneering         
</span><br>
<span class="quotelev2">&gt; &gt; lichanjuan04_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Tianshui South Road 222. Lanzhou  
</span><br>
<span class="quotelev2">&gt; &gt; 730000                      .P.R.China
</span><br>
<span class="quotelev2">&gt; &gt; Tel:+86-931-8912025                                Fax:+86-931-8912022
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Li, Chanjuan                                        Lanzhou University
Distributed &amp; Embedded System Lab              <a href="http://dslab.lzu.edu.cn">http://dslab.lzu.edu.cn</a>
School of Information Science and Engeneering        lichanjuan04_at_[hidden]
Tianshui South Road 222. Lanzhou 730000                      .P.R.China
Tel:+86-931-8912025                                Fax:+86-931-8912022

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3495/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3496.php">Allen Barnett: "[OMPI users] Thanks"</a>
<li><strong>Previous message:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
<li><strong>In reply to:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
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
