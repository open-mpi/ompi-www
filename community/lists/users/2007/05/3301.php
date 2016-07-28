<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 20:21:52 2007" -->
<!-- isoreceived="20070519002152" -->
<!-- sent="Fri, 18 May 2007 17:21:39 -0700" -->
<!-- isosent="20070519002139" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not execute a simple command with openmpi" -->
<!-- id="1947A576-3494-4267-852A-B52704AA2350_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="28bb77d30705181715n5ea09b7yc41ef10d07ec506f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-05-18 20:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3302.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3300.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3300.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hah!  Your reply came in seconds after I replied.
<br>
<p>Your questions made me notice that we're missing a FAQ entry for the  
<br>
&quot;ssh:rsh&quot; explanation, though, so I'll add an entry for that.  Thanks.
<br>
<p><p>On May 18, 2007, at 5:15 PM, Steven Truong wrote:
<br>
<p><span class="quotelev1">&gt; Hi, Jeff.  Ok.  After reading through the FAQ, I modified .bashrc to
</span><br>
<span class="quotelev1">&gt; set PATH and LD_LIBRARY_PATH and now I could execute:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [struong_at_neptune ~]$ ssh node07 which orted /usr/local/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1/bin/orted
</span><br>
<span class="quotelev1">&gt; [struong_at_neptune ~]$ /usr/local/openmpi-1.2.1/bin/mpirun --host node07
</span><br>
<span class="quotelev1">&gt; hostname node07.nanostellar.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; Steven.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/18/07, Steven Truong &lt;midair77_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Jeff.  Thanks so very much for all your helps so far.  I decided
</span><br>
<span class="quotelev2">&gt;&gt; that I needed to go back and check whether openmpi even works for
</span><br>
<span class="quotelev2">&gt;&gt; simple cases, so here I am.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my shell might have exited when it detect that I ran
</span><br>
<span class="quotelev2">&gt;&gt; non-interactively.   But then again, how this parameter
</span><br>
<span class="quotelev2">&gt;&gt; MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh :rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; affect my outcome?  How am I going to set PATH and LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt;&gt; be like those in .bash_profile in my Torque job files?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you give me some tips here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below is my current bash shell's settings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Steven.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [struong_at_neptune ~]$ echo $SHELL
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; [struong_at_neptune ~]$ cat .bash_profile | grep -v ^#
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if [ -f ~/.bashrc ]; then
</span><br>
<span class="quotelev2">&gt;&gt;         . ~/.bashrc
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; umask 027
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/opt/intel/fce/9.1.043/bin:/usr/local/openmpi-1.2.1/bin:/opt/ 
</span><br>
<span class="quotelev2">&gt;&gt; c3-4:/opt/bin:/usr/local/torque/bin:/usr/local/torque/sbin:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/maui/bin:/usr/local/maui/sbin:/usr/kerberos/sbin:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/ 
</span><br>
<span class="quotelev2">&gt;&gt; usr/bin:/usr/X11R6/bin:/usr/local/rrdtool-1.2.12/bin:~/bin
</span><br>
<span class="quotelev2">&gt;&gt; BASH_ENV=$HOME/.bashrc
</span><br>
<span class="quotelev2">&gt;&gt; FC=/opt/intel/fce/9.1.043/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt; F90=$FC
</span><br>
<span class="quotelev2">&gt;&gt; F77=$FC
</span><br>
<span class="quotelev2">&gt;&gt; F77_GETARGDECL=&quot; &quot;
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.2.1/lib
</span><br>
<span class="quotelev2">&gt;&gt; RSHCOMMAND=/usr/bin/ssh
</span><br>
<span class="quotelev2">&gt;&gt; PBS_DEFAULT=&quot;neptune&quot;
</span><br>
<span class="quotelev2">&gt;&gt; PBSLOGLEVEL=7
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_DIR=/tmp/rrdbuil
</span><br>
<span class="quotelev2">&gt;&gt; INSTALL_DIR=/usr/local/rrdtool-1.2.12
</span><br>
<span class="quotelev2">&gt;&gt; source /usr/local/ecce/scripts/runtime_setup.sh
</span><br>
<span class="quotelev2">&gt;&gt; export F77 USERNAME BASH_ENV PATH RSHCOMMAND FC F90 PBS_DEFAULT
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_DIR INSTALL_DIR LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [struong_at_neptune ~]$  ssh node07 which orted
</span><br>
<span class="quotelev2">&gt;&gt; which: no orted in (/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [struong_at_neptune ~]$ /usr/local/openmpi-1.2.1/bin/mpirun --host  
</span><br>
<span class="quotelev2">&gt;&gt; node07
</span><br>
<span class="quotelev2">&gt;&gt; node07 hostname
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; Failed to find the following executable:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Host:       node07.nanostellar.com
</span><br>
<span class="quotelev2">&gt;&gt; Executable: node07
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cannot continue.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/18/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 18, 2007, at 4:38 PM, Steven Truong wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [struong_at_neptune 4cpu4npar10nsim]$  mpirun --mca btl tcp,self -np 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --host node07 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: orted: command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you noted later in your mail, this is the key problem: orted is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not found on the remote node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Notice that you are currently using the rsh launcher, not the Torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launcher (presumably because you are not inside a Torque job).  What
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you want to check is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsh node07 which orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (or use ssh -- whatever is correct for your cluster)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect that orted will not be found, and that you'll need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modify your shell startup files to set PATH / LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly.  Note that some shell startup files will exit early if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; detect that they are running on a non-interactive login.  See  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; http://
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.open-mpi.org/faq/?category=running#adding-ompi-to-path for more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively, you can simply use the absolute pathname to mpirun,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which Open MPI will interpret to mean that you want OMPI to set the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH/LD_LIBRARY_PATH on the remote node for you.  Something like  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.1/bin/mpirun --host node07 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (note that the &quot;btl&quot; MCA parameter is only relevant for MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executables)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="3302.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3300.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3300.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
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
