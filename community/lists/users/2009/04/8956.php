<?
$subject_val = "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 11:37:41 2009" -->
<!-- isoreceived="20090416153741" -->
<!-- sent="Thu, 16 Apr 2009 11:37:33 -0400" -->
<!-- isosent="20090416153733" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel compiler libraries (was: libnuma issue)" -->
<!-- id="D56E3FA3-ABFC-4159-9320-ED0160A1202D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b87c422a0904160829m33e2e0ddt72960a851ac1a53f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intel compiler libraries (was: libnuma issue)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 11:37:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8957.php">Douglas Guptill: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Previous message:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8958.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8958.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8959.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2009, at 11:29 AM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; francesco_at_tya64:~$ ssh 192.168.1.33 env | sort
</span><br>
<span class="quotelev1">&gt; HOME=/home/francesco
</span><br>
<span class="quotelev1">&gt; LANG=en_US.UTF-8
</span><br>
<span class="quotelev1">&gt; LOGNAME=francesco
</span><br>
<span class="quotelev1">&gt; MAIL=/var/mail/francesco
</span><br>
<span class="quotelev1">&gt; PATH=/usr/local/bin:/usr/bin:/bin:/usr/bin/X11:/usr/games
</span><br>
<span class="quotelev1">&gt; PWD=/home/francesco
</span><br>
<span class="quotelev1">&gt; SHELL=/bin/bash
</span><br>
<span class="quotelev1">&gt; SHLVL=1
</span><br>
<span class="quotelev1">&gt; SSH_CLIENT=192.168.1.37 33941 22
</span><br>
<span class="quotelev1">&gt; SSH_CONNECTION=192.168.1.37 33941 192.168.1.33 22
</span><br>
<span class="quotelev1">&gt; USER=francesco
</span><br>
<span class="quotelev1">&gt; _=/usr/bin/env
</span><br>
<span class="quotelev1">&gt; francesco_at_tya64:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't see the intel compiler variables set in there, nor an  
<br>
LD_LIBRARY_PATH indicating where the intel libraries are located.  See  
<br>
my text from the last mail:
<br>
<p><span class="quotelev2">&gt; &gt; I'm guessing that you're not sourcing the intel .sh files for
</span><br>
<span class="quotelev2">&gt; &gt; non-interactive logins.  You'll need to check your shell startup  
</span><br>
<span class="quotelev1">&gt; files and
</span><br>
<span class="quotelev2">&gt; &gt; ensure that those sourcing lines are executed when you login to  
</span><br>
<span class="quotelev1">&gt; remote nodes
</span><br>
<span class="quotelev2">&gt; &gt; non-interactively.  E.g.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  thisnode$ ssh othernode env | sort
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; shows the relevant stuff in your environment on the other node.   
</span><br>
<span class="quotelev1">&gt; Note that
</span><br>
<span class="quotelev2">&gt; &gt; this is different than
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  thisnode$ ssh othernode
</span><br>
<span class="quotelev2">&gt; &gt;  othernode$ env | sort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You might well have some logic in your .bashrc that quits before fully  
<br>
executing when running non-interactive logins; hence, the &quot;. /opt/ 
<br>
intel/fce/10.1.022/bin/ifortvars.sh&quot; lines don't execute on the  
<br>
192.168.1.33 machine when you run non-interactive jobs.
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
<li><strong>Next message:</strong> <a href="8957.php">Douglas Guptill: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Previous message:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8958.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8958.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8959.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
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
