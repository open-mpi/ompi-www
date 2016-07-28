<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 07:10:45 2007" -->
<!-- isoreceived="20070614111045" -->
<!-- sent="Thu, 14 Jun 2007 07:10:24 -0400" -->
<!-- isosent="20070614111024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't run parallel job on cluster" -->
<!-- id="BD0B564E-8AB7-4D6A-B205-67B0D8201201_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="381702736.03403_at_st.lzu.edu.cn" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-14 07:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3495.php">lichanjuan04_at_[hidden]: "Re: [OMPI users] can't run parallel job on cluster"</a>
<li><strong>Previous message:</strong> <a href="3493.php">jody: "[OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Maybe in reply to:</strong> <a href="3479.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3495.php">lichanjuan04_at_[hidden]: "Re: [OMPI users] can't run parallel job on cluster"</a>
<li><strong>Reply:</strong> <a href="3495.php">lichanjuan04_at_[hidden]: "Re: [OMPI users] can't run parallel job on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You have two options:
<br>
<p>1. Ensure that your PATH and LD_LIBRARY_PATH are exactly what you  
<br>
think they are on the remote nodes.  A common problem that some  
<br>
people run into is that they setup their PATH/LD_LIBRARY_PATH in the  
<br>
&quot;interactive&quot; portions of their .bashrc, meaning that they are only  
<br>
set for interactive logins (and therefore not set for non-interactive  
<br>
logins).  Try the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh othernode 'echo $PATH'
<br>
<p>Note the single quotes; they are necessary to ensure that &quot;echo  
<br>
$PATH&quot; is evaluated on the *remote* node.  Do the same with  
<br>
$LD_LIBRARY_PATH and ensure that they are really set to the values  
<br>
that you think they are.  Check out the following FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>2. Use the --prefix functionality in mpirun to automatically set the  
<br>
PATH / LD_LIBRARY_PATH values for the remote node.  Check out this  
<br>
FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>
<p>Note that a synonym to the --prefix functionality that is not [yet]  
<br>
mentioned in that FAQ entry is that you can use the absolute pathname  
<br>
to mpirun.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/path/to/mpirun ...
<br>
<p>Or you can use OMPI 1.2's --enable-mpirun-prefix-by-default option to  
<br>
OMPI's configure, which will tell mpirun to always assume that it  
<br>
needs to use --prefix-like behavior (without you needing to specify  
<br>
it on the mpirun command line).
<br>
<p>Hope that helps.
<br>
<p><p>On Jun 12, 2007, at 11:58 PM, lichanjuan04_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 2007-06-13 at 11:47 +0800, lichanjuan04_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; hi,all:
</span><br>
<span class="quotelev2">&gt;&gt;     I am a first user of openmpi, I have used mpich before.I found  
</span><br>
<span class="quotelev2">&gt;&gt; there
</span><br>
<span class="quotelev2">&gt;&gt; are many differenties between them.So I am confused.
</span><br>
<span class="quotelev2">&gt;&gt;         I build openmpi on a ps3 using default option,that is
</span><br>
<span class="quotelev2">&gt;&gt;           $ ./configure --prefiex=
</span><br>
<span class="quotelev2">&gt;&gt;           $ make all install
</span><br>
<span class="quotelev2">&gt;&gt;         I modify my .bash_profile file and add openmpi lib and
</span><br>
<span class="quotelev2">&gt;&gt;         executable file
</span><br>
<span class="quotelev2">&gt;&gt;         in LD_LIBRARY_PATH and PATH.
</span><br>
<span class="quotelev2">&gt;&gt;         I use NFS file system between server and node, I just install
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi on
</span><br>
<span class="quotelev2">&gt;&gt;         server.
</span><br>
<span class="quotelev2">&gt;&gt;         I check the mailling list and FAQ, knowing default lancher is
</span><br>
<span class="quotelev2">&gt;&gt;         ssh,but I
</span><br>
<span class="quotelev2">&gt;&gt;         sitll add &quot;pls_rsh_agent = ssh&quot; in openmpi-mca-params.conf.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I test the hello_c.c example. when I run:
</span><br>
<span class="quotelev2">&gt;&gt;                 $mpiexec -host ps3-2 -n 4 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;         it can run correctly(ps3-2 is hostname of server).I try it on
</span><br>
<span class="quotelev2">&gt;&gt;         each node.
</span><br>
<span class="quotelev2">&gt;&gt;         but when I run:
</span><br>
<span class="quotelev2">&gt;&gt;                 $ mpiexec -hostfile host.txt -n 4 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         content of host.txt:
</span><br>
<span class="quotelev2">&gt;&gt;         ps3-1
</span><br>
<span class="quotelev2">&gt;&gt;         ps3-2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         there is error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         bash: orted: command not found
</span><br>
<span class="quotelev2">&gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt;         base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt;         pls_rsh_module.c
</span><br>
<span class="quotelev2">&gt;&gt;         at line 1164
</span><br>
<span class="quotelev2">&gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt;         errmgr_hnp.c at
</span><br>
<span class="quotelev2">&gt;&gt;         line 90
</span><br>
<span class="quotelev2">&gt;&gt;         [ps3-1:25154] ERROR: A daemon on node ps3-2 failed to  
</span><br>
<span class="quotelev2">&gt;&gt; start as
</span><br>
<span class="quotelev2">&gt;&gt;         expected.
</span><br>
<span class="quotelev2">&gt;&gt;         [ps3-1:25154] ERROR: There may be more information available
</span><br>
<span class="quotelev2">&gt;&gt;         from
</span><br>
<span class="quotelev2">&gt;&gt;         [ps3-1:25154] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt;         [ps3-1:25154] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt;&gt; status
</span><br>
<span class="quotelev2">&gt;&gt;         127.
</span><br>
<span class="quotelev2">&gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt;         base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt;         pls_rsh_module.c
</span><br>
<span class="quotelev2">&gt;&gt;         at line 1196
</span><br>
<span class="quotelev2">&gt;&gt;          
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;         mpiexec was unable to cleanly terminate the daemons for this
</span><br>
<span class="quotelev2">&gt;&gt;         job.
</span><br>
<span class="quotelev2">&gt;&gt;         Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;         I search the same problem in mailing list and FAQ, saying  
</span><br>
<span class="quotelev2">&gt;&gt; PATH
</span><br>
<span class="quotelev2">&gt;&gt;         and
</span><br>
<span class="quotelev2">&gt;&gt;         LD_LIBRARY_PATH are not setted correctly,but I ensure them  
</span><br>
<span class="quotelev2">&gt;&gt; in my
</span><br>
<span class="quotelev2">&gt;&gt;         path.
</span><br>
<span class="quotelev2">&gt;&gt;         I use openmpi in first time, so hope anybody help me,thanks a
</span><br>
<span class="quotelev2">&gt;&gt;         lot!
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; sorry, I forget some information. I use openmpi1.2, I try to run the
</span><br>
<span class="quotelev1">&gt; command on remote host such as ,run command on ps3-1:
</span><br>
<span class="quotelev1">&gt; 	$ mpiexec -host ps3-2 -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt; there appear same error message.I think there is something wrong with
</span><br>
<span class="quotelev1">&gt; rsh/ssh,but I don't where to modify or some file I missed.
</span><br>
<span class="quotelev1">&gt; if someone met same problem,please tell me the solution. I will be
</span><br>
<span class="quotelev1">&gt; grateful. thanks very much!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 					Li chanjuan
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Li, Chanjuan                                        Lanzhou University
</span><br>
<span class="quotelev1">&gt; Distributed &amp; Embedded System Lab              <a href="http://dslab.lzu.edu.cn">http://dslab.lzu.edu.cn</a>
</span><br>
<span class="quotelev1">&gt; School of Information Science and Engeneering         
</span><br>
<span class="quotelev1">&gt; lichanjuan04_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tianshui South Road 222. Lanzhou  
</span><br>
<span class="quotelev1">&gt; 730000                      .P.R.China
</span><br>
<span class="quotelev1">&gt; Tel:+86-931-8912025                                Fax:+86-931-8912022
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3495.php">lichanjuan04_at_[hidden]: "Re: [OMPI users] can't run parallel job on cluster"</a>
<li><strong>Previous message:</strong> <a href="3493.php">jody: "[OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Maybe in reply to:</strong> <a href="3479.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3495.php">lichanjuan04_at_[hidden]: "Re: [OMPI users] can't run parallel job on cluster"</a>
<li><strong>Reply:</strong> <a href="3495.php">lichanjuan04_at_[hidden]: "Re: [OMPI users] can't run parallel job on cluster"</a>
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
