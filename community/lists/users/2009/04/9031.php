<?
$subject_val = "Re: [OMPI users] Problems with SSH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 14:17:43 2009" -->
<!-- isoreceived="20090422181743" -->
<!-- sent="Wed, 22 Apr 2009 14:16:40 -0400" -->
<!-- isosent="20090422181640" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with SSH" -->
<!-- id="E0CC8407-A395-491C-8780-EA53779E8E6B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CA7EB605-2F69-41AB-B092-2779314BB01B_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with SSH<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 14:16:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9032.php">Yaakoub El Khamra: "[OMPI users] Question about restart"</a>
<li><strong>Previous message:</strong> <a href="9030.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
<li><strong>In reply to:</strong> <a href="9003.php">Luis Vitorio Cargnini: "[OMPI users] Problems with SSH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like something must not be right in your password-less ssh  
<br>
setup.  You need to be able to &quot;ssh cluster-srv2.logti.etsmtl.ca  
<br>
uptime&quot; and have it not ask for a password.  Are you able to do that?
<br>
<p>On Apr 21, 2009, at 10:36 AM, Luis Vitorio Cargnini wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Please I did as mentioned into the FAQ for SSH password-less but the
</span><br>
<span class="quotelev1">&gt; mpirun still requesting me the password ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ mpirun -d -v -hostfile chosts -np 16  ./hello
</span><br>
<span class="quotelev1">&gt; [cluster-srv0.logti.etsmtl.ca:31929] procdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; /41688/0/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0.logti.etsmtl.ca:31929] jobdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; /41688/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0.logti.etsmtl.ca:31929] top: openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv0.logti.etsmtl.ca:31929] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [cluster-srv0.logti.etsmtl.ca:31929] mpirun: reset PATH: /export/
</span><br>
<span class="quotelev1">&gt; cluster/appl/x86_64/llvm/bin:/bin:/sbin:/export/cluster/appl/x86_64/
</span><br>
<span class="quotelev1">&gt; llvm/bin:/usr/local/llvm/bin:/usr/local/bin:/usr/bin:/usr/sbin:/home/
</span><br>
<span class="quotelev1">&gt; GTI420/AH72000/oe/bitbake/bin
</span><br>
<span class="quotelev1">&gt; [cluster-srv0.logti.etsmtl.ca:31929] mpirun: reset LD_LIBRARY_PATH: /
</span><br>
<span class="quotelev1">&gt; export/cluster/appl/x86_64/llvm/lib:/lib64:/lib:/export/cluster/appl/
</span><br>
<span class="quotelev1">&gt; x86_64/llvm/lib:/usr/lib64:/usr/lib:/usr/local/lib64:/usr/local/lib
</span><br>
<span class="quotelev1">&gt; AH72000_at_[hidden]'s password: AH72000_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 's password: AH72000_at_[hidden]'s password:
</span><br>
<span class="quotelev1">&gt; [cluster-srv1.logti.etsmtl.ca:02621] procdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; /41688/0/1
</span><br>
<span class="quotelev1">&gt; [cluster-srv1.logti.etsmtl.ca:02621] jobdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; /41688/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1.logti.etsmtl.ca:02621] top: openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv1.logti.etsmtl.ca:02621] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; AH72000_at_[hidden]'s password:
</span><br>
<span class="quotelev1">&gt; [cluster-srv3.logti.etsmtl.ca:09730] procdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; /41688/0/3
</span><br>
<span class="quotelev1">&gt; [cluster-srv3.logti.etsmtl.ca:09730] jobdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; /41688/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3.logti.etsmtl.ca:09730] top: openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv3.logti.etsmtl.ca:09730] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; AH72000_at_[hidden]'s password:
</span><br>
<span class="quotelev1">&gt; [cluster-srv2.logti.etsmtl.ca:12802] procdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; /41688/0/2
</span><br>
<span class="quotelev1">&gt; [cluster-srv2.logti.etsmtl.ca:12802] jobdir: /tmp/openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; /41688/0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2.logti.etsmtl.ca:12802] top: openmpi-sessions-AH72000_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [cluster-srv2.logti.etsmtl.ca:12802] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;PGP.sig&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="9032.php">Yaakoub El Khamra: "[OMPI users] Question about restart"</a>
<li><strong>Previous message:</strong> <a href="9030.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
<li><strong>In reply to:</strong> <a href="9003.php">Luis Vitorio Cargnini: "[OMPI users] Problems with SSH"</a>
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
