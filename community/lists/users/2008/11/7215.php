<?
$subject_val = "Re: [OMPI users] ompi 1.3 make distclean broken ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 16:00:30 2008" -->
<!-- isoreceived="20081105210030" -->
<!-- sent="Wed, 5 Nov 2008 16:00:23 -0500" -->
<!-- isosent="20081105210023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi 1.3 make distclean broken ?" -->
<!-- id="7C129959-5346-47EF-A55E-83FC608A773D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="531893A968B34D40B36C7A6445BC828A01FDFD34_at_catoexm06.noam.corp.platform.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi 1.3 make distclean broken ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-05 16:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7216.php">Peter Beerli: "[OMPI users] program stalls in __write_nocancel()"</a>
<li><strong>Previous message:</strong> <a href="7214.php">Jeff Squyres: "Re: [OMPI users] OK, got it installed, but...  can't find libraries"</a>
<li><strong>In reply to:</strong> <a href="7209.php">Mehdi Bozzo-Rey: "[OMPI users] ompi 1.3 make distclean broken ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are absolutely correct; looks like a typo in orte/util/ 
<br>
Makefile.am.  Thanks for reporting this!
<br>
<p>I fixed it on the trunk in r19936 and have filed a CMR to get it over  
<br>
to the v1.3 branch.
<br>
<p><p>On Nov 5, 2008, at 8:54 AM, Mehdi Bozzo-Rey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like make distclean will remove the following file:  
</span><br>
<span class="quotelev1">&gt; orte_hosts.7 and prevent a configure, new make ; make install.
</span><br>
<span class="quotelev1">&gt; I tried the pre-release versions (openmpi-1.3b1,b2) and one nightly  
</span><br>
<span class="quotelev1">&gt; tarball (openmpi-1.3b2r19907):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For openmpi-1.3b2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 1 :
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/tmp/openmpi-1.3b2 ; make ; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 2:
</span><br>
<span class="quotelev1">&gt; Make distclean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 1 again will fail:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; test -z &quot;/tmp/openmpi-1.3b2/share/openmpi&quot; || /bin/mkdir -p &quot;/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2/share/openmpi&quot;
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'runtime/help-orte-runtime.txt' '/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2/share/openmpi/help-orte-runtime.txt'
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'util/hostfile/help-hostfile.txt' '/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2/share/openmpi/help-hostfile.txt'
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'util/dash_host/help-dash-host.txt' '/ 
</span><br>
<span class="quotelev1">&gt; tmp/openmpi-1.3b2/share/openmpi/help-dash-host.txt'
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'orted/help-orted.txt' '/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2/share/openmpi/help-orted.txt'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/tmp/openmpi-1.3b2/share/man/man7&quot; || /bin/mkdir -p &quot;/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2/share/man/man7&quot;
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'util/hostfile/orte_hosts.7' '/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2/share/man/man7/orte_hosts.7'
</span><br>
<span class="quotelev1">&gt; /usr/bin/install: cannot stat `util/hostfile/orte_hosts.7': No such  
</span><br>
<span class="quotelev1">&gt; file or directory
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-man7] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mbozzore/compile_temp/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2/orte'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mbozzore/compile_temp/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2/orte'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mbozzore/compile_temp/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [mbozzore_at_mel1 openmpi-1.3b2]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For openmpi-1.3b2r19907:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 1:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/tmp/openmpi-1.3b2r19907 ; make ; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 2:
</span><br>
<span class="quotelev1">&gt; Make distclean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Step 1 again will fail:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; test -z &quot;/tmp/openmpi-1.3b2r19907/share/openmpi&quot; || /bin/mkdir -p &quot;/ 
</span><br>
<span class="quotelev1">&gt; tmp/openmpi-1.3b2r19907/share/openmpi&quot;
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'runtime/help-orte-runtime.txt' '/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2r19907/share/openmpi/help-orte-runtime.txt'
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'util/hostfile/help-hostfile.txt' '/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2r19907/share/openmpi/help-hostfile.txt'
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'util/dash_host/help-dash-host.txt' '/ 
</span><br>
<span class="quotelev1">&gt; tmp/openmpi-1.3b2r19907/share/openmpi/help-dash-host.txt'
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'orted/help-orted.txt' '/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2r19907/share/openmpi/help-orted.txt'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/tmp/openmpi-1.3b2r19907/share/man/man7&quot; || /bin/mkdir -p &quot;/ 
</span><br>
<span class="quotelev1">&gt; tmp/openmpi-1.3b2r19907/share/man/man7&quot;
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'util/hostfile/orte_hosts.7' '/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2r19907/share/man/man7/orte_hosts.7'
</span><br>
<span class="quotelev1">&gt; /usr/bin/install: cannot stat `util/hostfile/orte_hosts.7': No such  
</span><br>
<span class="quotelev1">&gt; file or directory
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-man7] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mbozzore/compile_temp/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2r19907/orte'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mbozzore/compile_temp/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2r19907/orte'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mbozzore/compile_temp/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3b2r19907/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mehdi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mehdi Bozzo-Rey
</span><br>
<span class="quotelev1">&gt; HPC Solution Developer
</span><br>
<span class="quotelev1">&gt; Platform OCS5
</span><br>
<span class="quotelev1">&gt; Platform computing
</span><br>
<span class="quotelev1">&gt; Phone: +1 905 948 4649
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7216.php">Peter Beerli: "[OMPI users] program stalls in __write_nocancel()"</a>
<li><strong>Previous message:</strong> <a href="7214.php">Jeff Squyres: "Re: [OMPI users] OK, got it installed, but...  can't find libraries"</a>
<li><strong>In reply to:</strong> <a href="7209.php">Mehdi Bozzo-Rey: "[OMPI users] ompi 1.3 make distclean broken ?"</a>
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
