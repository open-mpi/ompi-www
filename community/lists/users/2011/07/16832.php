<?
$subject_val = "Re: [OMPI users] openmpi-1.5.2 installation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 10:17:21 2011" -->
<!-- isoreceived="20110706141721" -->
<!-- sent="Wed, 6 Jul 2011 10:17:12 -0400" -->
<!-- isosent="20110706141712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.5.2 installation problem" -->
<!-- id="C042E44F-DC71-48B8-A6F4-47B7A64F4D5E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJ-S7c-YAypU3CXpZ0x_8q-meOraMXF7XGN3CxR+AJhm-YQtsA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.5.2 installation problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 10:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16833.php">Constantinos Makassikis: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>Previous message:</strong> <a href="16831.php">Sushil Mishra: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>In reply to:</strong> <a href="16829.php">Sushil Mishra: "[OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16835.php">Sushil Mishra: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Reply:</strong> <a href="16835.php">Sushil Mishra: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you'll need to add LDFLAGS=-L/usr/heimdal/lib to your configure line so that the linker can find it.  E.g.:
<br>
<p>&nbsp;&nbsp;./configure LDFLAGS=-L/usr/heimdal/lib ...
<br>
<p>You may need to add /usr/heimdal/lib to your LD_LIBRARY_FLAGS, so that the run-time linker can find it, too (ie., when you actually run OMPI executables such as mpirun).
<br>
<p>On Jul 6, 2011, at 5:27 AM, Sushil Mishra wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt; I am trying to install openmpi-1.5.2 in Debian 4.3.2-1.1. I am not a root user and I have to do it as user. The problem I am facing is in &quot;make all&quot; and error is fallowing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mca/plm/tm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte/mca/plm/tm'
</span><br>
<span class="quotelev1">&gt;   CC     plm_tm_component.lo
</span><br>
<span class="quotelev1">&gt;   CC     plm_tm_module.lo
</span><br>
<span class="quotelev1">&gt;   CCLD   mca_plm_tm.la
</span><br>
<span class="quotelev1">&gt; /bin/grep: /usr/lib/libgssapi.la: No such file or directory
</span><br>
<span class="quotelev1">&gt; /bin/sed: can't read /usr/lib/libgssapi.la: No such file or directory
</span><br>
<span class="quotelev1">&gt; libtool: link: `/usr/lib/libgssapi.la' is not a valid libtool archive
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mca_plm_tm.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte/mca/plm/tm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It cant find libgssapi.la file in /usr/lib whereas this file is present in /usr/heimdal/lib/ not in /usr/lib/  . I cant see where to change the path so that it can use it from there, or really I am missing some other packages ? Can any of you please suggest me how to tell this path to the script?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sincerely
</span><br>
<span class="quotelev1">&gt; Sushil
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16833.php">Constantinos Makassikis: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>Previous message:</strong> <a href="16831.php">Sushil Mishra: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>In reply to:</strong> <a href="16829.php">Sushil Mishra: "[OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16835.php">Sushil Mishra: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Reply:</strong> <a href="16835.php">Sushil Mishra: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
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
