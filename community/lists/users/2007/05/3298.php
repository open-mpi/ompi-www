<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 20:01:38 2007" -->
<!-- isoreceived="20070519000138" -->
<!-- sent="Fri, 18 May 2007 17:01:34 -0700" -->
<!-- isosent="20070519000134" -->
<!-- name="Steven Truong" -->
<!-- email="midair77_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not execute a simple command with openmpi" -->
<!-- id="28bb77d30705181701y1a0098a3i73a59dedce7d6c77_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="31EE4671-F047-404C-AAA9-54F4DB76DC61_at_cisco.com" -->
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
<strong>Date:</strong> 2007-05-18 20:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3297.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3297.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Reply:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Reply:</strong> <a href="3300.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Jeff.  Thanks so very much for all your helps so far.  I decided
<br>
that I needed to go back and check whether openmpi even works for
<br>
simple cases, so here I am.
<br>
<p>So my shell might have exited when it detect that I ran
<br>
non-interactively.   But then again, how this parameter
<br>
MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh :rsh&quot;)
<br>
<p>affect my outcome?  How am I going to set PATH and LD_LIBRARY_PATH to
<br>
be like those in .bash_profile in my Torque job files?
<br>
<p>Could you give me some tips here?
<br>
<p>Below is my current bash shell's settings.
<br>
<p>Thanks,
<br>
Steven.
<br>
<p>[struong_at_neptune ~]$ echo $SHELL
<br>
/bin/bash
<br>
[struong_at_neptune ~]$ cat .bash_profile | grep -v ^#
<br>
<p>if [ -f ~/.bashrc ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. ~/.bashrc
<br>
fi
<br>
<p>umask 027
<br>
PATH=/opt/intel/fce/9.1.043/bin:/usr/local/openmpi-1.2.1/bin:/opt/c3-4:/opt/bin:/usr/local/torque/bin:/usr/local/torque/sbin:/usr/local/maui/bin:/usr/local/maui/sbin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/usr/X11R6/bin:/usr/local/rrdtool-1.2.12/bin:~/bin
<br>
BASH_ENV=$HOME/.bashrc
<br>
FC=/opt/intel/fce/9.1.043/bin/ifort
<br>
F90=$FC
<br>
F77=$FC
<br>
F77_GETARGDECL=&quot; &quot;
<br>
LD_LIBRARY_PATH=/usr/local/openmpi-1.2.1/lib
<br>
RSHCOMMAND=/usr/bin/ssh
<br>
PBS_DEFAULT=&quot;neptune&quot;
<br>
PBSLOGLEVEL=7
<br>
BUILD_DIR=/tmp/rrdbuil
<br>
INSTALL_DIR=/usr/local/rrdtool-1.2.12
<br>
source /usr/local/ecce/scripts/runtime_setup.sh
<br>
export F77 USERNAME BASH_ENV PATH RSHCOMMAND FC F90 PBS_DEFAULT
<br>
BUILD_DIR INSTALL_DIR LD_LIBRARY_PATH
<br>
<p>[struong_at_neptune ~]$  ssh node07 which orted
<br>
which: no orted in (/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin)
<br>
<p>[struong_at_neptune ~]$ /usr/local/openmpi-1.2.1/bin/mpirun --host node07
<br>
node07 hostname
<br>
--------------------------------------------------------------------------
<br>
Failed to find the following executable:
<br>
<p>Host:       node07.nanostellar.com
<br>
Executable: node07
<br>
<p>Cannot continue.
<br>
--------------------------------------------------------------------------
<br>
<p><p>On 5/18/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On May 18, 2007, at 4:38 PM, Steven Truong wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [struong_at_neptune 4cpu4npar10nsim]$  mpirun --mca btl tcp,self -np 1
</span><br>
<span class="quotelev2">&gt; &gt; --host node07 hostname
</span><br>
<span class="quotelev2">&gt; &gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you noted later in your mail, this is the key problem: orted is
</span><br>
<span class="quotelev1">&gt; not found on the remote node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice that you are currently using the rsh launcher, not the Torque
</span><br>
<span class="quotelev1">&gt; launcher (presumably because you are not inside a Torque job).  What
</span><br>
<span class="quotelev1">&gt; you want to check is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rsh node07 which orted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (or use ssh -- whatever is correct for your cluster)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that orted will not be found, and that you'll need to
</span><br>
<span class="quotelev1">&gt; modify your shell startup files to set PATH / LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; properly.  Note that some shell startup files will exit early if they
</span><br>
<span class="quotelev1">&gt; detect that they are running on a non-interactive login.  See http://
</span><br>
<span class="quotelev1">&gt; www.open-mpi.org/faq/?category=running#adding-ompi-to-path for more
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, you can simply use the absolute pathname to mpirun,
</span><br>
<span class="quotelev1">&gt; which Open MPI will interpret to mean that you want OMPI to set the
</span><br>
<span class="quotelev1">&gt; PATH/LD_LIBRARY_PATH on the remote node for you.  Something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.1/bin/mpirun --host node07 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note that the &quot;btl&quot; MCA parameter is only relevant for MPI executables)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3297.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3297.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Reply:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Reply:</strong> <a href="3300.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
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
