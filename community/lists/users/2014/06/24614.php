<?
$subject_val = "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 19:00:34 2014" -->
<!-- isoreceived="20140609230034" -->
<!-- sent="Mon, 9 Jun 2014 16:00:33 -0700" -->
<!-- isosent="20140609230033" -->
<!-- name="Vineet Rawat" -->
<!-- email="vineetrawat0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E" -->
<!-- id="CA+h+pRWrHsnAj5JG0i3tKhYQZU1hY2nFgx1u_WVhorgB4oRjkA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A3DDDA8E-E089-4F38-BFA1-220903095634_at_cisco.com" -->
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
<strong>From:</strong> Vineet Rawat (<em>vineetrawat0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 19:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24615.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24613.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24615.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24615.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jun 9, 2014 at 3:40 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 9, 2014, at 6:36 PM, Vineet Rawat &lt;vineetrawat0_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; No, we only included what seemed necessary (from ldd output and
</span><br>
<span class="quotelev1">&gt; experience on other clusters). The only things in my &lt;prefix&gt;/lib/openmpi
</span><br>
<span class="quotelev1">&gt; are libompi_dbg_msgq*. Is that what you're referring to? In &lt;prefix&gt;/lib
</span><br>
<span class="quotelev1">&gt; for 12.8.1 (ignoring the VampirTrace libs) I could add libmpi_mpifh,
</span><br>
<span class="quotelev1">&gt; libmpi_usempi, libompitrace and/or liboshmem. Anything needed there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need basically everything that OMPI installs under the $prefix tree.
</span><br>
<span class="quotelev1">&gt;  I see you're compiling statically, so OMPI slurps all of its plugins into
</span><br>
<span class="quotelev1">&gt; the .a library files, but you'll basically need all of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, since you're using --enable-static, all of OMPI's
</span><br>
<span class="quotelev1">&gt; libraries should be statically linked against the orted.  Meaning that the
</span><br>
<span class="quotelev1">&gt; orted should be ok, even if you didn't copy all the .a files to all
</span><br>
<span class="quotelev1">&gt; servers.  But still, in general, we tell people to make the entire $prefix
</span><br>
<span class="quotelev1">&gt; tree to all servers in the MPI job (e.g., if you don't include all the help
</span><br>
<span class="quotelev1">&gt; files, you can get less-than-helpful help messages when things go wrong).
</span><br>
<span class="quotelev1">&gt;  You can even make them available via NFS, if it's easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We actually do ship the &lt;prefix&gt;/share and &lt;prefix&gt;/etc directories. We
<br>
set OPAL_PREFIX to a sub-directory of our installation and make sure those
<br>
things are in our PATH/LD_LIBRARY_PATH.
<br>
<p>I can try adding the additional shared libs but it doesn't sound like
<br>
anything's dlopen'ed so I'm not sure it'll help.
<br>
<p>Vineet
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24614/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24615.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24613.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24615.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24615.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
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
