<?
$subject_val = "[OMPI users] Problems with OpenMPI running with Rmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 06:42:05 2008" -->
<!-- isoreceived="20081017104205" -->
<!-- sent="Fri, 17 Oct 2008 12:42:01 +0200" -->
<!-- isosent="20081017104201" -->
<!-- name="Simone Giannerini" -->
<!-- email="sgiannerini_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with OpenMPI running with Rmpi" -->
<!-- id="3c12769c0810170342g4d840b48gc5ba269db40dbd21_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems with OpenMPI running with Rmpi<br>
<strong>From:</strong> Simone Giannerini (<em>sgiannerini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 06:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7010.php">Mike Hanby: "Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful"</a>
<li><strong>Previous message:</strong> <a href="7008.php">Teng Lin: "[OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7016.php">Dirk Eddelbuettel: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>Reply:</strong> <a href="7016.php">Dirk Eddelbuettel: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>Maybe reply:</strong> <a href="7051.php">Simone Giannerini: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I managed to install successfully Rmpi 0.5-5 on a quad opteron machine (8
<br>
cores overall) running on OpenSUSE 11.0 and Open MPI 1.5.2.
<br>
<p>this is what I get
<br>
<p><span class="quotelev1">&gt; library(Rmpi)
</span><br>
[gauss:24207] mca: base: component_find: unable to open osc pt2pt: file not
<br>
found (ignored)
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,0,0]: OpenIB on host gauss was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
<p>WARNING: Failed to open &quot;OpenIB-cma&quot;
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
<p>WARNING: Failed to open &quot;OpenIB-cma-1&quot;
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
<p>WARNING: Failed to open &quot;OpenIB-cma-2&quot;
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
<p>WARNING: Failed to open &quot;OpenIB-cma-3&quot;
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
<p>WARNING: Failed to open &quot;OpenIB-bond&quot;
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
<p>WARNING: Failed to open &quot;ofa-v2-ib0&quot;
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
<p>WARNING: Failed to open &quot;ofa-v2-ib1&quot;
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
<p>WARNING: Failed to open &quot;ofa-v2-ib2&quot;
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,0,0]: uDAPL on host gauss was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; mpi.spawn.Rslaves()
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 slaves are spawned successfully. 0 failed.
<br>
master (rank 0, comm 1) of size 2 is running on: gauss
<br>
slave1 (rank 1, comm 1) of size 2 is running on: gauss
<br>
<p>as you can see, just 1 cpu per session (2 cores) is recognized and used.
<br>
<p>and this is the content of my etc/conf.dat
<br>
<p>OpenIB-cma u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib0 0&quot; &quot;&quot;
<br>
OpenIB-cma-1 u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib1 0&quot; &quot;&quot;
<br>
OpenIB-cma-2 u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib2 0&quot; &quot;&quot;
<br>
OpenIB-cma-3 u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;ib3 0&quot; &quot;&quot;
<br>
OpenIB-bond u1.2 nonthreadsafe default libdaplcma.so.1 dapl.1.2 &quot;bond0 0&quot; &quot;&quot;
<br>
ofa-v2-ib0 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib0 0&quot; &quot;&quot;
<br>
ofa-v2-ib1 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib1 0&quot; &quot;&quot;
<br>
ofa-v2-ib2 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib2 0&quot; &quot;&quot;
<br>
ofa-v2-ib3 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib3 0&quot; &quot;&quot;
<br>
ofa-v2-bond u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;bond0 0&quot; &quot;&quot;
<br>
<p><p>I have searched the archives and found that the following suggestion was
<br>
given for a similar problem:
<br>
<p><span class="quotelev1">&gt; Open MPI has Infiniband module compiled but there is no IB device found
</span><br>
<span class="quotelev1">&gt; on your host. Try to add &quot;--mca btl ^openib&quot; string to your command
</span><br>
<span class="quotelev1">&gt; line.
</span><br>
<p>Since I am not calling mpi directly but through Rmpi  I do not know where to
<br>
put that flag, I might contact the Rmpi mantainer, in any case, I would be
<br>
grateful if you had further suggestions.
<br>
<p>Thank you very much,
<br>
<p>Simone
<br>
<p><pre>
-- 
______________________________________________________
Simone Giannerini
Dipartimento di Scienze Statistiche &quot;Paolo Fortunati&quot;
Universita' di Bologna
Via delle belle arti 41 - 40126  Bologna,  ITALY
Tel: +39 051 2098262  Fax: +39 051 232153
<a href="http://www2.stat.unibo.it/giannerini/">http://www2.stat.unibo.it/giannerini/</a>
______________________________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7010.php">Mike Hanby: "Re: [OMPI users] OpenMPI portability problems: debug info isn'thelpful"</a>
<li><strong>Previous message:</strong> <a href="7008.php">Teng Lin: "[OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7016.php">Dirk Eddelbuettel: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>Reply:</strong> <a href="7016.php">Dirk Eddelbuettel: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>Maybe reply:</strong> <a href="7051.php">Simone Giannerini: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
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
