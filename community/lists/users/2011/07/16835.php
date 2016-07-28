<?
$subject_val = "Re: [OMPI users] openmpi-1.5.2 installation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 12:13:05 2011" -->
<!-- isoreceived="20110706161305" -->
<!-- sent="Wed, 6 Jul 2011 18:12:41 +0200" -->
<!-- isosent="20110706161241" -->
<!-- name="Sushil Mishra" -->
<!-- email="sushilbioinfo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.5.2 installation problem" -->
<!-- id="CAJ-S7c8jDOa_nXaGdyoDfp+bfe9LPr8t3yb=m-VVwLv3y6NYaQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C042E44F-DC71-48B8-A6F4-47B7A64F4D5E_at_cisco.com" -->
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
<strong>From:</strong> Sushil Mishra (<em>sushilbioinfo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 12:12:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16836.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16834.php">Prentice Bisbal: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>In reply to:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16836.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Reply:</strong> <a href="16836.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried it like fallowing but it do not work :
<br>
./configure LDFLAGS=-L/usr/heimdal/lib --prefix=$AMBERHOME
<br>
<p>It still has the same error. Any other suggestions ?
<br>
<p><p><p>On Wed, Jul 6, 2011 at 4:17 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think you'll need to add LDFLAGS=-L/usr/heimdal/lib to your configure
</span><br>
<span class="quotelev1">&gt; line so that the linker can find it.  E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure LDFLAGS=-L/usr/heimdal/lib ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may need to add /usr/heimdal/lib to your LD_LIBRARY_FLAGS, so that the
</span><br>
<span class="quotelev1">&gt; run-time linker can find it, too (ie., when you actually run OMPI
</span><br>
<span class="quotelev1">&gt; executables such as mpirun).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2011, at 5:27 AM, Sushil Mishra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all:
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to install openmpi-1.5.2 in Debian 4.3.2-1.1. I am not a root
</span><br>
<span class="quotelev1">&gt; user and I have to do it as user. The problem I am facing is in &quot;make all&quot;
</span><br>
<span class="quotelev1">&gt; and error is fallowing:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making all in mca/plm/tm
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte/mca/plm/tm'
</span><br>
<span class="quotelev2">&gt; &gt;   CC     plm_tm_component.lo
</span><br>
<span class="quotelev2">&gt; &gt;   CC     plm_tm_module.lo
</span><br>
<span class="quotelev2">&gt; &gt;   CCLD   mca_plm_tm.la
</span><br>
<span class="quotelev2">&gt; &gt; /bin/grep: /usr/lib/libgssapi.la: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sed: can't read /usr/lib/libgssapi.la: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: `/usr/lib/libgssapi.la' is not a valid libtool archive
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [mca_plm_tm.la] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte/mca/plm/tm'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It cant find libgssapi.la file in /usr/lib whereas this file is present
</span><br>
<span class="quotelev1">&gt; in /usr/heimdal/lib/ not in /usr/lib/  . I cant see where to change the path
</span><br>
<span class="quotelev1">&gt; so that it can use it from there, or really I am missing some other packages
</span><br>
<span class="quotelev1">&gt; ? Can any of you please suggest me how to tell this path to the script?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sincerely
</span><br>
<span class="quotelev2">&gt; &gt; Sushil
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16836.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16834.php">Prentice Bisbal: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>In reply to:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16836.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Reply:</strong> <a href="16836.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
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
