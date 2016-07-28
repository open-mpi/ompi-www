<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 20:15:49 2007" -->
<!-- isoreceived="20070519001549" -->
<!-- sent="Fri, 18 May 2007 17:15:44 -0700" -->
<!-- isosent="20070519001544" -->
<!-- name="Steven Truong" -->
<!-- email="midair77_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not execute a simple command with openmpi" -->
<!-- id="28bb77d30705181715n5ea09b7yc41ef10d07ec506f_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="28bb77d30705181701y1a0098a3i73a59dedce7d6c77_at_mail.gmail.com" -->
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
<strong>From:</strong> Steven Truong (<em>midair77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 20:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3300.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3301.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Reply:</strong> <a href="3301.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Jeff.  Ok.  After reading through the FAQ, I modified .bashrc to
<br>
set PATH and LD_LIBRARY_PATH and now I could execute:
<br>
<p>[struong_at_neptune ~]$ ssh node07 which orted /usr/local/openmpi-1.2.1/bin/orted
<br>
[struong_at_neptune ~]$ /usr/local/openmpi-1.2.1/bin/mpirun --host node07
<br>
hostname node07.nanostellar.com
<br>
<p>Thank you.
<br>
Steven.
<br>
<p><p><p>On 5/18/07, Steven Truong &lt;midair77_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi, Jeff.  Thanks so very much for all your helps so far.  I decided
</span><br>
<span class="quotelev1">&gt; that I needed to go back and check whether openmpi even works for
</span><br>
<span class="quotelev1">&gt; simple cases, so here I am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my shell might have exited when it detect that I ran
</span><br>
<span class="quotelev1">&gt; non-interactively.   But then again, how this parameter
</span><br>
<span class="quotelev1">&gt; MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh :rsh&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; affect my outcome?  How am I going to set PATH and LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt; be like those in .bash_profile in my Torque job files?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you give me some tips here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is my current bash shell's settings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Steven.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [struong_at_neptune ~]$ echo $SHELL
</span><br>
<span class="quotelev1">&gt; /bin/bash
</span><br>
<span class="quotelev1">&gt; [struong_at_neptune ~]$ cat .bash_profile | grep -v ^#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ -f ~/.bashrc ]; then
</span><br>
<span class="quotelev1">&gt;         . ~/.bashrc
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; umask 027
</span><br>
<span class="quotelev1">&gt; PATH=/opt/intel/fce/9.1.043/bin:/usr/local/openmpi-1.2.1/bin:/opt/c3-4:/opt/bin:/usr/local/torque/bin:/usr/local/torque/sbin:/usr/local/maui/bin:/usr/local/maui/sbin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/usr/X11R6/bin:/usr/local/rrdtool-1.2.12/bin:~/bin
</span><br>
<span class="quotelev1">&gt; BASH_ENV=$HOME/.bashrc
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/fce/9.1.043/bin/ifort
</span><br>
<span class="quotelev1">&gt; F90=$FC
</span><br>
<span class="quotelev1">&gt; F77=$FC
</span><br>
<span class="quotelev1">&gt; F77_GETARGDECL=&quot; &quot;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.2.1/lib
</span><br>
<span class="quotelev1">&gt; RSHCOMMAND=/usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; PBS_DEFAULT=&quot;neptune&quot;
</span><br>
<span class="quotelev1">&gt; PBSLOGLEVEL=7
</span><br>
<span class="quotelev1">&gt; BUILD_DIR=/tmp/rrdbuil
</span><br>
<span class="quotelev1">&gt; INSTALL_DIR=/usr/local/rrdtool-1.2.12
</span><br>
<span class="quotelev1">&gt; source /usr/local/ecce/scripts/runtime_setup.sh
</span><br>
<span class="quotelev1">&gt; export F77 USERNAME BASH_ENV PATH RSHCOMMAND FC F90 PBS_DEFAULT
</span><br>
<span class="quotelev1">&gt; BUILD_DIR INSTALL_DIR LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [struong_at_neptune ~]$  ssh node07 which orted
</span><br>
<span class="quotelev1">&gt; which: no orted in (/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [struong_at_neptune ~]$ /usr/local/openmpi-1.2.1/bin/mpirun --host node07
</span><br>
<span class="quotelev1">&gt; node07 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       node07.nanostellar.com
</span><br>
<span class="quotelev1">&gt; Executable: node07
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/18/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On May 18, 2007, at 4:38 PM, Steven Truong wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [struong_at_neptune 4cpu4npar10nsim]$  mpirun --mca btl tcp,self -np 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --host node07 hostname
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bash: orted: command not found
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As you noted later in your mail, this is the key problem: orted is
</span><br>
<span class="quotelev2">&gt; &gt; not found on the remote node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Notice that you are currently using the rsh launcher, not the Torque
</span><br>
<span class="quotelev2">&gt; &gt; launcher (presumably because you are not inside a Torque job).  What
</span><br>
<span class="quotelev2">&gt; &gt; you want to check is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rsh node07 which orted
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (or use ssh -- whatever is correct for your cluster)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suspect that orted will not be found, and that you'll need to
</span><br>
<span class="quotelev2">&gt; &gt; modify your shell startup files to set PATH / LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; properly.  Note that some shell startup files will exit early if they
</span><br>
<span class="quotelev2">&gt; &gt; detect that they are running on a non-interactive login.  See http://
</span><br>
<span class="quotelev2">&gt; &gt; www.open-mpi.org/faq/?category=running#adding-ompi-to-path for more
</span><br>
<span class="quotelev2">&gt; &gt; details.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Alternatively, you can simply use the absolute pathname to mpirun,
</span><br>
<span class="quotelev2">&gt; &gt; which Open MPI will interpret to mean that you want OMPI to set the
</span><br>
<span class="quotelev2">&gt; &gt; PATH/LD_LIBRARY_PATH on the remote node for you.  Something like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.2.1/bin/mpirun --host node07 hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (note that the &quot;btl&quot; MCA parameter is only relevant for MPI executables)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3300.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3301.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Reply:</strong> <a href="3301.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
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
