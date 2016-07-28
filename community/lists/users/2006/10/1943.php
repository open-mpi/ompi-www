<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  6 13:17:12 2006" -->
<!-- isoreceived="20061006171712" -->
<!-- sent="Fri, 06 Oct 2006 13:16:44 -0400" -->
<!-- isosent="20061006171644" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro" -->
<!-- id="C14C07BC.29E08%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D392D4803D14354CBC49D772E19DD0CD16E395_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-06 13:16:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1944.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<li><strong>Previous message:</strong> <a href="1942.php">Maestas, Christopher Daniel: "[OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>In reply to:</strong> <a href="1933.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/5/06 12:05 PM, &quot;Andrus, Mr. Brian (Contractor)&quot;
<br>
&lt;brian.andrus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I am having some trouble getting the RPM to compile when I add
</span><br>
<span class="quotelev1">&gt; PBSPro.
</span><br>
<span class="quotelev1">&gt; I have been able to successfully create it with Myrinet and using PGI
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<p>That's quite odd.  There should be nothing in the packaging that is special
<br>
about PBSPro.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Now getting it to package up with PBSPro is another story. It looks like
</span><br>
<span class="quotelev1">&gt; it compiles fine, but the packaging may be the issue. I thought I should
</span><br>
<span class="quotelev1">&gt; post here to see if anyone has already been down this path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I use:
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild --define configure_options&quot; --with-gm=/opt/gm
</span><br>
<span class="quotelev1">&gt; --disable-shared --with-tm=/usr/pbs CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90
</span><br>
<span class="quotelev1">&gt; FFLAGS=-fastsse FCFLAGS=-fastsse &quot; ./openmpi-1.1.1-1.src.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I eventually get:
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/usr/src/redhat/BUILD/openmpi-1.1.1'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `install-exec-am'.
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/src/redhat/BUILD/openmpi-1.1.1'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/usr/src/redhat/BUILD/openmpi-1.1.1'
</span><br>
<span class="quotelev1">&gt; + rm -f /var/tmp/openmpi-1.1.1-1-root//usr/bin/openmpi
</span><br>
<span class="quotelev1">&gt; + rm -f /var/tmp/openmpi-1.1.1-1-root//usr/bin/orteconsole
</span><br>
<span class="quotelev1">&gt; + rm -f /var/tmp/openmpi-1.1.1-1-root//usr/bin/orteprobe
</span><br>
<span class="quotelev1">&gt; + find /var/tmp/openmpi-1.1.1-1-root -type f -o -type l
</span><br>
<span class="quotelev1">&gt; + sed -e s@/var/tmp/openmpi-1.1.1-1-root@@
</span><br>
<span class="quotelev1">&gt; + egrep 'lib.*.so|mca.*so'
</span><br>
<span class="quotelev1">&gt; error: Bad exit status from /var/tmp/rpm-tmp.30796 (%install)
</span><br>
<p>Well, that's not too helpful, is it?  A pox on RPM!  ;-)
<br>
<p>Was there any stderr output before this tht might shed light on what went
<br>
wrong?  It may be very far out of order from the stdout output due to
<br>
buffering.
<br>
<p>Can you try to run this command manually and see what happens?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;find / var/tmp/openmpi-1.1.1-1-root |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sed -e @s/var/tmp/openmpi-1.1.1-1-root@ |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;egrep 'lib.*.so|mca.*so'
<br>
<p>(assuming you still have the /var/tmp/openmpi-1.1.1-1-root tree around)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;     Bad exit status from /var/tmp/rpm-tmp.30796 (%install)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Andrus
</span><br>
<span class="quotelev1">&gt; QSS Group, Inc.
</span><br>
<span class="quotelev1">&gt; Naval Research Laboratory
</span><br>
<span class="quotelev1">&gt; Monterey, California
</span><br>
<span class="quotelev1">&gt; Desk: 831-656-4839
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1944.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<li><strong>Previous message:</strong> <a href="1942.php">Maestas, Christopher Daniel: "[OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>In reply to:</strong> <a href="1933.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
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
