<?
$subject_val = "[OMPI users] ompi 1.3 make distclean broken ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 08:54:59 2008" -->
<!-- isoreceived="20081105135459" -->
<!-- sent="Wed, 5 Nov 2008 08:54:54 -0500" -->
<!-- isosent="20081105135454" -->
<!-- name="Mehdi Bozzo-Rey" -->
<!-- email="mbozzore_at_[hidden]" -->
<!-- subject="[OMPI users] ompi 1.3 make distclean broken ?" -->
<!-- id="531893A968B34D40B36C7A6445BC828A01FDFD34_at_catoexm06.noam.corp.platform.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] ompi 1.3 make distclean broken ?<br>
<strong>From:</strong> Mehdi Bozzo-Rey (<em>mbozzore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-05 08:54:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7210.php">Ralph Castain: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>Previous message:</strong> <a href="7208.php">PattiMichelle: "[OMPI users] OK, got it installed, but...  can't find libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7215.php">Jeff Squyres: "Re: [OMPI users] ompi 1.3 make distclean broken ?"</a>
<li><strong>Reply:</strong> <a href="7215.php">Jeff Squyres: "Re: [OMPI users] ompi 1.3 make distclean broken ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>It looks like make distclean will remove the following file:
<br>
orte_hosts.7 and prevent a configure, new make ; make install.
<br>
<p>I tried the pre-release versions (openmpi-1.3b1,b2) and one nightly
<br>
tarball (openmpi-1.3b2r19907):
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>For openmpi-1.3b2:
<br>
<p>&nbsp;
<br>
<p>Step 1 : 
<br>
<p>./configure --prefix=/tmp/openmpi-1.3b2 ; make ; make install
<br>
<p>&nbsp;
<br>
<p>Step 2:
<br>
<p>Make distclean
<br>
<p>&nbsp;
<br>
<p>Step 1 again will fail:
<br>
<p>&nbsp;
<br>
<p>----------------------------------------------------------------------
<br>
<p>test -z &quot;/tmp/openmpi-1.3b2/share/openmpi&quot; || /bin/mkdir -p
<br>
&quot;/tmp/openmpi-1.3b2/share/openmpi&quot;
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'runtime/help-orte-runtime.txt'
<br>
'/tmp/openmpi-1.3b2/share/openmpi/help-orte-runtime.txt'
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'util/hostfile/help-hostfile.txt'
<br>
'/tmp/openmpi-1.3b2/share/openmpi/help-hostfile.txt'
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'util/dash_host/help-dash-host.txt'
<br>
'/tmp/openmpi-1.3b2/share/openmpi/help-dash-host.txt'
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'orted/help-orted.txt'
<br>
'/tmp/openmpi-1.3b2/share/openmpi/help-orted.txt'
<br>
<p>test -z &quot;/tmp/openmpi-1.3b2/share/man/man7&quot; || /bin/mkdir -p
<br>
&quot;/tmp/openmpi-1.3b2/share/man/man7&quot;
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'util/hostfile/orte_hosts.7'
<br>
'/tmp/openmpi-1.3b2/share/man/man7/orte_hosts.7'
<br>
<p>/usr/bin/install: cannot stat `util/hostfile/orte_hosts.7': No such file
<br>
or directory
<br>
<p>make[3]: *** [install-man7] Error 1
<br>
<p>make[3]: Leaving directory
<br>
`/home/mbozzore/compile_temp/ompi/openmpi-1.3b2/orte'
<br>
<p>make[2]: *** [install-am] Error 2
<br>
<p>make[2]: Leaving directory
<br>
`/home/mbozzore/compile_temp/ompi/openmpi-1.3b2/orte'
<br>
<p>make[1]: *** [install-recursive] Error 1
<br>
<p>make[1]: Leaving directory
<br>
`/home/mbozzore/compile_temp/ompi/openmpi-1.3b2/orte'
<br>
<p>make: *** [install-recursive] Error 1
<br>
<p>[mbozzore_at_mel1 openmpi-1.3b2]$
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>For openmpi-1.3b2r19907:
<br>
<p>&nbsp;
<br>
<p>Step 1: 
<br>
<p>./configure --prefix=/tmp/openmpi-1.3b2r19907 ; make ; make install 
<br>
<p>&nbsp;
<br>
<p>Step 2: 
<br>
<p>Make distclean
<br>
<p>&nbsp;
<br>
<p>Step 1 again will fail:
<br>
<p>&nbsp;
<br>
<p>test -z &quot;/tmp/openmpi-1.3b2r19907/share/openmpi&quot; || /bin/mkdir -p
<br>
&quot;/tmp/openmpi-1.3b2r19907/share/openmpi&quot;
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'runtime/help-orte-runtime.txt'
<br>
'/tmp/openmpi-1.3b2r19907/share/openmpi/help-orte-runtime.txt'
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'util/hostfile/help-hostfile.txt'
<br>
'/tmp/openmpi-1.3b2r19907/share/openmpi/help-hostfile.txt'
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'util/dash_host/help-dash-host.txt'
<br>
'/tmp/openmpi-1.3b2r19907/share/openmpi/help-dash-host.txt'
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'orted/help-orted.txt'
<br>
'/tmp/openmpi-1.3b2r19907/share/openmpi/help-orted.txt'
<br>
<p>test -z &quot;/tmp/openmpi-1.3b2r19907/share/man/man7&quot; || /bin/mkdir -p
<br>
&quot;/tmp/openmpi-1.3b2r19907/share/man/man7&quot;
<br>
<p>&nbsp;/usr/bin/install -c -m 644 'util/hostfile/orte_hosts.7'
<br>
'/tmp/openmpi-1.3b2r19907/share/man/man7/orte_hosts.7'
<br>
<p>/usr/bin/install: cannot stat `util/hostfile/orte_hosts.7': No such file
<br>
or directory
<br>
<p>make[3]: *** [install-man7] Error 1
<br>
<p>make[3]: Leaving directory
<br>
`/home/mbozzore/compile_temp/ompi/openmpi-1.3b2r19907/orte'
<br>
<p>make[2]: *** [install-am] Error 2
<br>
<p>make[2]: Leaving directory
<br>
`/home/mbozzore/compile_temp/ompi/openmpi-1.3b2r19907/orte'
<br>
<p>make[1]: *** [install-recursive] Error 1
<br>
<p>make[1]: Leaving directory
<br>
`/home/mbozzore/compile_temp/ompi/openmpi-1.3b2r19907/orte'
<br>
<p>make: *** [install-recursive] Error 1
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Mehdi
<br>
<p>&nbsp;
<br>
<p>Mehdi Bozzo-Rey &lt;mailto:mbozzore_at_[hidden]&gt; 
<br>
<p>HPC Solution Developer
<br>
<p>Platform OCS5
<br>
&lt;<a href="http://www.platform.com/Products/platform-open-cluster-stack5">http://www.platform.com/Products/platform-open-cluster-stack5</a>&gt; 
<br>
<p>Platform computing
<br>
<p>Phone: +1 905 948 4649
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7210.php">Ralph Castain: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>Previous message:</strong> <a href="7208.php">PattiMichelle: "[OMPI users] OK, got it installed, but...  can't find libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7215.php">Jeff Squyres: "Re: [OMPI users] ompi 1.3 make distclean broken ?"</a>
<li><strong>Reply:</strong> <a href="7215.php">Jeff Squyres: "Re: [OMPI users] ompi 1.3 make distclean broken ?"</a>
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
