<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 20:21:02 2007" -->
<!-- isoreceived="20070519002102" -->
<!-- sent="Fri, 18 May 2007 17:20:43 -0700" -->
<!-- isosent="20070519002043" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not execute a simple command with openmpi" -->
<!-- id="5B9EB6EE-161B-47E4-A98F-5BB04084957C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 20:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3301.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2007, at 5:01 PM, Steven Truong wrote:
<br>
<p><span class="quotelev1">&gt; So my shell might have exited when it detect that I ran
</span><br>
<span class="quotelev1">&gt; non-interactively.   But then again, how this parameter
</span><br>
<span class="quotelev1">&gt; MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh :rsh&quot;)
</span><br>
<span class="quotelev1">&gt; affect my outcome?
</span><br>
<p>It means that OMPI is going to first look for ssh, and if it doesn't  
<br>
find it, it will use rsh.
<br>
<p><span class="quotelev1">&gt; How am I going to set PATH and LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt; be like those in .bash_profile in my Torque job files?
</span><br>
<p>Err... I don't know.  It depends on what is set in your Torque job  
<br>
files and how it is set.
<br>
<p>Normally, Torque jobs copy the environment from where you invoked  
<br>
qsub.  So if you have PATH / LD_LIBRARY_PATH set properly in the  
<br>
shell where you invoke qsub, it should automatically propagate out to  
<br>
where your script runs.
<br>
<p><span class="quotelev1">&gt; Could you give me some tips here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [struong_at_neptune ~]$ cat .bash_profile | grep -v ^#
</span><br>
<p>According to the FAQ entry that I cited to you, you need to set the  
<br>
PATH / LD_LIBRARY_PATH in .bashrc, not .bash_profile.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p><span class="quotelev1">&gt; [struong_at_neptune ~]$  ssh node07 which orted
</span><br>
<span class="quotelev1">&gt; which: no orted in (/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin)
</span><br>
<p>If you're not setting the PATH / LD_LIBRARY_PATH in your .bashrc,  
<br>
this is to be expected.
<br>
<p><span class="quotelev1">&gt; [struong_at_neptune ~]$ /usr/local/openmpi-1.2.1/bin/mpirun --host node07
</span><br>
<span class="quotelev1">&gt; node07 hostname
</span><br>
<p>Note that you listed &quot;node07&quot; twice.  Hence, mpirun thought that the  
<br>
2nd &quot;node07&quot; was your executable name, resulting in the predictable  
<br>
error:
<br>
<p><span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
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
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<p>Because there is no executable named &quot;node07&quot;.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3301.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3299.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3298.php">Steven Truong: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
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
