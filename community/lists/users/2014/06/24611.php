<?
$subject_val = "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 18:40:45 2014" -->
<!-- isoreceived="20140609224045" -->
<!-- sent="Mon, 9 Jun 2014 22:40:44 +0000" -->
<!-- isosent="20140609224044" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E" -->
<!-- id="A3DDDA8E-E089-4F38-BFA1-220903095634_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+h+pRVHXnM8EjKmZ2_c7y7E4QGti_570R3Vb1GT9BkyKLjKdQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 18:40:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24612.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24610.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24610.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24612.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24612.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 9, 2014, at 6:36 PM, Vineet Rawat &lt;vineetrawat0_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; No, we only included what seemed necessary (from ldd output and experience on other clusters). The only things in my &lt;prefix&gt;/lib/openmpi are libompi_dbg_msgq*. Is that what you're referring to? In &lt;prefix&gt;/lib for 12.8.1 (ignoring the VampirTrace libs) I could add libmpi_mpifh, libmpi_usempi, libompitrace and/or liboshmem. Anything needed there?
</span><br>
<p>You need basically everything that OMPI installs under the $prefix tree.  I see you're compiling statically, so OMPI slurps all of its plugins into the .a library files, but you'll basically need all of them.
<br>
<p>That being said, since you're using --enable-static, all of OMPI's libraries should be statically linked against the orted.  Meaning that the orted should be ok, even if you didn't copy all the .a files to all servers.  But still, in general, we tell people to make the entire $prefix tree to all servers in the MPI job (e.g., if you don't include all the help files, you can get less-than-helpful help messages when things go wrong).  You can even make them available via NFS, if it's easier.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24612.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24610.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24610.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24612.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24612.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
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
