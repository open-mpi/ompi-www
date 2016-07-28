<?
$subject_val = "Re: [OMPI users] openmpi-1.5.2 installation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 08:43:52 2011" -->
<!-- isoreceived="20110706124352" -->
<!-- sent="Wed, 6 Jul 2011 14:43:28 +0200" -->
<!-- isosent="20110706124328" -->
<!-- name="Sushil Mishra" -->
<!-- email="sushilbioinfo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.5.2 installation problem" -->
<!-- id="CAJ-S7c831js4=xuVzUyZv6AodCR1hDXv4mB5jZJY7FdF-441mQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25EC8023-D9C1-49DA-B281-C9FA692D5432_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-07-06 08:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>In reply to:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes, I have this variable in my shell environment.
<br>
<span class="quotelev1">&gt; echo $LD_LIBRARY_PATH
</span><br>
/usr/heimdal/lib
<br>
<p>Do i need to replace it somewhere else in the files ?
<br>
<p>/sushil
<br>
<p>On Wed, Jul 6, 2011 at 2:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We don't directly link to that library, so it must be getting pulled in by
</span><br>
<span class="quotelev1">&gt; some other lib. Have you tried adding /usr/heimdal/lib to your
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH before building?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2011, at 3:27 AM, Sushil Mishra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt; I am trying to install openmpi-1.5.2 in Debian 4.3.2-1.1. I am not a root
</span><br>
<span class="quotelev1">&gt; user and I have to do it as user. The problem I am facing is in &quot;make all&quot;
</span><br>
<span class="quotelev1">&gt; and error is fallowing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/plm/tm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte/mca/plm/tm'
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
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte/mca/plm/tm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/sushil/Softwares/amber11/AmberTools/src/openmpi-1.5.2/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It cant find libgssapi.la file in /usr/lib whereas this file is present in
</span><br>
<span class="quotelev1">&gt; /usr/heimdal/lib/ not in /usr/lib/  . I cant see where to change the path so
</span><br>
<span class="quotelev1">&gt; that it can use it from there, or really I am missing some other packages ?
</span><br>
<span class="quotelev1">&gt; Can any of you please suggest me how to tell this path to the script?
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
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16831/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>Previous message:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>In reply to:</strong> <a href="16830.php">Ralph Castain: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
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
