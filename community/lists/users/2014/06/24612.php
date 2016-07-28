<?
$subject_val = "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 18:48:19 2014" -->
<!-- isoreceived="20140609224819" -->
<!-- sent="Mon, 9 Jun 2014 15:48:15 -0700" -->
<!-- isosent="20140609224815" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E" -->
<!-- id="CFD883D7-71D4-46DC-9F85-34CB1AC63AED_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 18:48:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24613.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is one new &quot;feature&quot; in 1.8 - it now checks to see if the version on the backend matches the version on the frontend. In other words, mpirun checks to see if the orted connecting to it is from the same version - if not, the orted will die.
<br>
<p>Shouldn't segfault, though - just abort.
<br>
<p>You could set --debug-daemons -mca oob_base_verbose 10 to see if the daemons are able to connect back to mpirun - that's pretty much a basic requirement.
<br>
<p>On Jun 9, 2014, at 3:40 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 9, 2014, at 6:36 PM, Vineet Rawat &lt;vineetrawat0_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, we only included what seemed necessary (from ldd output and experience on other clusters). The only things in my &lt;prefix&gt;/lib/openmpi are libompi_dbg_msgq*. Is that what you're referring to? In &lt;prefix&gt;/lib for 12.8.1 (ignoring the VampirTrace libs) I could add libmpi_mpifh, libmpi_usempi, libompitrace and/or liboshmem. Anything needed there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need basically everything that OMPI installs under the $prefix tree.  I see you're compiling statically, so OMPI slurps all of its plugins into the .a library files, but you'll basically need all of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, since you're using --enable-static, all of OMPI's libraries should be statically linked against the orted.  Meaning that the orted should be ok, even if you didn't copy all the .a files to all servers.  But still, in general, we tell people to make the entire $prefix tree to all servers in the MPI job (e.g., if you don't include all the help files, you can get less-than-helpful help messages when things go wrong).  You can even make them available via NFS, if it's easier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24613.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
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
