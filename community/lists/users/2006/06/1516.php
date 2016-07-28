<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 09:07:28 2006" -->
<!-- isoreceived="20060630130728" -->
<!-- sent="Fri, 30 Jun 2006 09:07:20 -0400" -->
<!-- isosent="20060630130720" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1" -->
<!-- id="8d39cca0606300607y4007e607uf88dbe8c087276f7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9E8B_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-30 09:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1517.php">Patrick Jessee: "Re: [OMPI users] error messages for btl components that aren't	loaded"</a>
<li><strong>Previous message:</strong> <a href="1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>In reply to:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>The bug with poll was fixed in the stable Torque 2.1.1 release, and I have
<br>
checked again
<br>
to make sure that pbsdsh does work.
<br>
<p>jbronder_at_meldrew-linux ~/src/hpl $ qsub -I -q default -l nodes=4:ppn=2 -l
<br>
opsys=darwin
<br>
qsub: waiting for job 312.ldap1.meldrew.clusters.umaine.edu to start
<br>
qsub: job 312.ldap1.meldrew.clusters.umaine.edu ready
<br>
<p>node96:~ jbronder$ pbsdsh uname -a
<br>
Darwin node96.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version 8.6.0:
<br>
Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
<br>
Macintosh powerpc
<br>
Darwin node96.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version 8.6.0:
<br>
Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
<br>
Macintosh powerpc
<br>
Darwin node94.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version 8.6.0:
<br>
Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
<br>
Macintosh powerpc
<br>
Darwin node94.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version 8.6.0:
<br>
Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
<br>
Macintosh powerpc
<br>
Darwin node95.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version 8.6.0:
<br>
Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
<br>
Macintosh powerpc
<br>
Darwin node95.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version 8.6.0:
<br>
Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
<br>
Macintosh powerpc
<br>
Darwin node93.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version 8.6.0:
<br>
Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
<br>
Macintosh powerpc
<br>
Darwin node93.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version 8.6.0:
<br>
Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
<br>
Macintosh powerpc
<br>
node96:~ jbronder$
<br>
<p>If there is anything else I should check, please let me know.
<br>
<p>Thanks,
<br>
<p>Justin Bronder.
<br>
<p>On 6/30/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  There was a bug in early Torque 2.1.x versions (I'm afraid I don't
</span><br>
<span class="quotelev1">&gt; remember which one) that -- I think -- had something to do with a faulty
</span><br>
<span class="quotelev1">&gt; poll() implementation.  Whatever the problem was, it caused all TM launchers
</span><br>
<span class="quotelev1">&gt; to fail on OSX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you see if the Torque-included tool pbsdsh works properly?  It uses
</span><br>
<span class="quotelev1">&gt; the same API that Open MPI does (the &quot;tm&quot; api).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If pbsdsh fails, I suspect you're looking at a Torque bug.  I know
</span><br>
<span class="quotelev1">&gt; that Garrick S. has since fixed the problem in the Torque code base; I don't
</span><br>
<span class="quotelev1">&gt; know if they've had a release since then that included the fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If pbsdsh works, let us know and we'll track this down further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Justin Bronder
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 29, 2006 5:19 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] OpenMpi 1.1 and Torque 2.1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having trouble getting OpenMPI to execute jobs when submitting through
</span><br>
<span class="quotelev1">&gt; Torque.
</span><br>
<span class="quotelev1">&gt; Everything works fine if I am to use the included mpirun scripts, but this
</span><br>
<span class="quotelev1">&gt; is obviously
</span><br>
<span class="quotelev1">&gt; not a good solution for the general users on the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running under OS X 10.4, Darwin 8.6.0.  I configured OpenMpi with:
</span><br>
<span class="quotelev1">&gt; export CC=/opt/ibmcmp/vac/6.0/bin/xlc
</span><br>
<span class="quotelev1">&gt; export CXX=/opt/ibmcmp/vacpp/6.0/bin/xlc++
</span><br>
<span class="quotelev1">&gt; export FC=/opt/ibmcmp/xlf/8.1/bin/xlf90_r
</span><br>
<span class="quotelev1">&gt; export F77=/opt/ibmcmp/xlf/8.1/bin/xlf_r
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=-lSystemStubs
</span><br>
<span class="quotelev1">&gt; export LIBTOOL=glibtool
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PREFIX=/usr/local/ompi-xl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;     --prefix=$PREFIX \
</span><br>
<span class="quotelev1">&gt;     --with-tm=/usr/local/pbs/ \
</span><br>
<span class="quotelev1">&gt;     --with-gm=/opt/gm \
</span><br>
<span class="quotelev1">&gt;     --enable-static \
</span><br>
<span class="quotelev1">&gt;     --disable-cxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also had to employ the fix listed in:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/04/1007.php">http://www.open-mpi.org/community/lists/users/2006/04/1007.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached the output of ompi_info while in an interactive job.
</span><br>
<span class="quotelev1">&gt; Looking through the list,
</span><br>
<span class="quotelev1">&gt; I can at least save a bit of trouble by listing what does work.  Anything
</span><br>
<span class="quotelev1">&gt; outside of Torque
</span><br>
<span class="quotelev1">&gt; seems fine.  From within an interactive job, pbsdsh works fine, hence the
</span><br>
<span class="quotelev1">&gt; earlier problems
</span><br>
<span class="quotelev1">&gt; with poll are fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the error that is reported when I attemt to run hostname on one
</span><br>
<span class="quotelev1">&gt; processor:
</span><br>
<span class="quotelev1">&gt; node96:/usr/src/openmpi-1.1 jbronder$ /usr/local/ompi-xl/bin/mpirun -np 1
</span><br>
<span class="quotelev1">&gt; -mca pls_tm_debug 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] pls:tm: final top-level argv:
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] pls:tm:     orted
</span><br>
<span class="quotelev1">&gt; --no-daemonize --bootproxy 1 --name  --num_procs 2 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; --nodename  --universe jbronder_at_[hidden]:default-universe
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.0.1.96:49395&quot; --gprreplica &quot;0.0.0
</span><br>
<span class="quotelev1">&gt; ;tcp://10.0.1.96:49395&quot;
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] pls:tm: Set
</span><br>
<span class="quotelev1">&gt; prefix:/usr/local/ompi-xl
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] pls:tm: launching on node
</span><br>
<span class="quotelev1">&gt; localhost
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] pls:tm: resetting PATH:
</span><br>
<span class="quotelev1">&gt; /usr/local/ompi-xl/bin:/bin:/sbin:/usr/bin:/usr/sbin:/usr/local/pbs/bin:/usr/local/mpiexec/bin:/opt/ibmcmp/xlf/8.1/bin:/opt/ibmcmp/vac/6.0/bin:/opt/ibmcmp/vacpp/6.0/bin:/opt/gm/bin:/opt/fms/bin
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] pls:tm: found
</span><br>
<span class="quotelev1">&gt; /usr/local/ompi-xl/bin/orted
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] pls:tm: not oversubscribed --
</span><br>
<span class="quotelev1">&gt; setting mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] pls:tm: executing: orted
</span><br>
<span class="quotelev1">&gt; --no-daemonize --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; --nodename localhost --universe
</span><br>
<span class="quotelev1">&gt; jbronder_at_[hidden]:default-universe --nsreplica &quot;
</span><br>
<span class="quotelev1">&gt; 0.0.0;tcp://10.0.1.96:49395&quot; --gprreplica &quot;0.0.0;tcp://10.0.1.96:49395&quot;
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] pls:tm: start_procs returned
</span><br>
<span class="quotelev1">&gt; error -13
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] [0,0,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt; found in file rmgr_urm.c at line 184
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] [0,0,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt; found in file rmgr_urm.c at line 432
</span><br>
<span class="quotelev1">&gt; [node96.meldrew.clusters.umaine.edu:00850] mpirun: spawn failed with
</span><br>
<span class="quotelev1">&gt; errno=-13
</span><br>
<span class="quotelev1">&gt; node96:/usr/src/openmpi-1.1 jbronder$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My thanks for any help in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Justin Bronder.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1516/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1517.php">Patrick Jessee: "Re: [OMPI users] error messages for btl components that aren't	loaded"</a>
<li><strong>Previous message:</strong> <a href="1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>In reply to:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
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
