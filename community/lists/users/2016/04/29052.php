<?
$subject_val = "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 10:38:30 2016" -->
<!-- isoreceived="20160429143830" -->
<!-- sent="Fri, 29 Apr 2016 07:38:21 -0700" -->
<!-- isosent="20160429143821" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8" -->
<!-- id="17EB37BD-0ED5-4012-98CB-0471C152FBE3_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5ueW3F8pi+OzgbDDgfBQmmXKR8+LzNfF7Omj34xUPaGcg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 10:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29053.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="29051.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="29051.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29053.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29053.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, okay - I can fix that line. Thanks for pointing it out.
<br>
<p>Given that the rest of the code uses the app[i] syntax, I&#226;&#128;&#153;d rather leave that alone.
<br>
<p><p><span class="quotelev1">&gt; On Apr 29, 2016, at 7:27 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the second for loop is incorrect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it reads
</span><br>
<span class="quotelev1">&gt; for (j=0; j &lt; app-&gt;argc; j++)
</span><br>
<span class="quotelev1">&gt; but should be
</span><br>
<span class="quotelev1">&gt; for (j=0; j &lt; app[i].argc; j++)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as a matter of taste, I'd rather replace all app[i]. with app-&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; app++;
</span><br>
<span class="quotelev1">&gt; at the end (or in the for) of the outermost loop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday, April 29, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;well, I may have to wait and let Gilles fix this. So far as I can see, the code in the current OMPI 2.x tarball (and upstream) is correct:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int pmix_bfrop_pack_app(pmix_buffer_t *buffer, const void *src,
</span><br>
<span class="quotelev1">&gt;                         int32_t num_vals, pmix_data_type_t type)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     pmix_app_t *app;
</span><br>
<span class="quotelev1">&gt;     int32_t i, j, nvals;
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     app = (pmix_app_t *) src;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; num_vals; ++i) {
</span><br>
<span class="quotelev1">&gt;         if (PMIX_SUCCESS != (ret = pmix_bfrop_pack_string(buffer, &amp;app[i].cmd, 1, PMIX_STRING))) {
</span><br>
<span class="quotelev1">&gt;             return ret;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         /* argv */
</span><br>
<span class="quotelev1">&gt;         if (PMIX_SUCCESS != (ret = pmix_bfrop_pack_int(buffer, &amp;app[i].argc, 1, PMIX_INT))) {
</span><br>
<span class="quotelev1">&gt;             return ret;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         for (j=0; j &lt; app-&gt;argc; j++) {
</span><br>
<span class="quotelev1">&gt;             if (PMIX_SUCCESS != (ret = pmix_bfrop_pack_string(buffer, &amp;app[i].argv[j], 1, PMIX_STRING))) {
</span><br>
<span class="quotelev1">&gt;                 return ret;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         /* env */
</span><br>
<span class="quotelev1">&gt;         nvals = pmix_argv_count(app[i].env);
</span><br>
<span class="quotelev1">&gt;         if (PMIX_SUCCESS != (ret = pmix_bfrop_pack_int32(buffer, &amp;nvals, 1, PMIX_INT32))) {
</span><br>
<span class="quotelev1">&gt;             return ret;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         for (j=0; j &lt; nvals; j++) {
</span><br>
<span class="quotelev1">&gt;             if (PMIX_SUCCESS != (ret = pmix_bfrop_pack_string(buffer, &amp;app[i].env[j], 1, PMIX_STRING))) {
</span><br>
<span class="quotelev1">&gt;                 return ret;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         /* maxprocs */
</span><br>
<span class="quotelev1">&gt;         if (PMIX_SUCCESS != (ret = pmix_bfrop_pack_int(buffer, &amp;app[i].maxprocs, 1, PMIX_INT))) {
</span><br>
<span class="quotelev1">&gt;             return ret;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         /* info array */
</span><br>
<span class="quotelev1">&gt;         if (PMIX_SUCCESS != (ret = pmix_bfrop_pack_sizet(buffer, &amp;app[i].ninfo, 1, PMIX_SIZE))) {
</span><br>
<span class="quotelev1">&gt;             return ret;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if (0 &lt; app[i].ninfo) {
</span><br>
<span class="quotelev1">&gt;             if (PMIX_SUCCESS != (ret = pmix_bfrop_pack_info(buffer, app[i].info, app[i].ninfo, PMIX_INFO))) {
</span><br>
<span class="quotelev1">&gt;                 return ret;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     return PMIX_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar: have you tried the latest release candidate?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 28, 2016, at 11:08 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thank you very much for identifying the reason for the problem
</span><br>
<span class="quotelev2">&gt;&gt; and fixing it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have a nice weekend
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 29.04.2016 um 03:38 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in pmix_bfrop_pack_app,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app-&gt;argc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; must be replaced with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app[i].argc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will PR to pmix, ompi and ompi-release when I am back at work on Monday
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday, April 28, 2016, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:gilles_at_[hidden] &lt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Siegmar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    can you please also post the source of spawn_slave ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On 4/28/2016 1:17 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Hi Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    it is not necessary to have a heterogeneous environment to reproduce
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    the error as you can see below. All machines are 64 bit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    tyr spawn 119 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    absolute&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          OPAL repo revision: v2.x-dev-1290-gbd0e4e1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    tyr spawn 120 uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    SunOS tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt; &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a> &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    5.10 Generic_150400-11 sun4u sparc SUNW,A70 Solaris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    tyr spawn 121 mpiexec -np 1 --host tyr,tyr,tyr,tyr spawn_multiple_master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Parent process 0 running on tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &lt;<a href="http://tyr.informatik.hs-fulda.de">http://tyr.informatik.hs-fulda.de</a> &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      I create 3 slave processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27286
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &lt;<a href="http://tyr.informatik.hs-fulda.de:27286">http://tyr.informatik.hs-fulda.de:27286</a> &lt;<a href="http://tyr.informatik.hs-fulda.de:27286/">http://tyr.informatik.hs-fulda.de:27286/</a>&gt;&gt;] PMIX ERROR: UNPACK-PAST-END
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at line 829
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [tyr.informatik.hs-fulda.de &lt;<a href="http://tyr.informatik.hs-fulda.de/">http://tyr.informatik.hs-fulda.de/</a>&gt;:27286
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &lt;<a href="http://tyr.informatik.hs-fulda.de:27286">http://tyr.informatik.hs-fulda.de:27286</a> &lt;<a href="http://tyr.informatik.hs-fulda.de:27286/">http://tyr.informatik.hs-fulda.de:27286/</a>&gt;&gt;] PMIX ERROR: UNPACK-PAST-END
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at line 2176
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [tyr:27288] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [tyr:27288] *** reported by process [3434086401,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [tyr:27288] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [tyr:27288] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [tyr:27288] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    will now abort,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [tyr:27288] ***    and potentially your MPI job)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    tyr spawn 122
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    sunpc1 fd1026 105 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    compiler absolute&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          OPAL repo revision: v2.x-dev-1290-gbd0e4e1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    sunpc1 fd1026 106 uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    SunOS sunpc1 5.10 Generic_147441-21 i86pc i386 i86pc Solaris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    sunpc1 fd1026 107 mpiexec -np 1 --host sunpc1,sunpc1,sunpc1,sunpc1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    spawn_multiple_master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Parent process 0 running on sunpc1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      I create 3 slave processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [sunpc1:00368] PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at line 829
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [sunpc1:00368] PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at line 2176
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [sunpc1:370] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [sunpc1:370] *** reported by process [43909121,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [sunpc1:370] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [sunpc1:370] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [sunpc1:370] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    will now abort,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [sunpc1:370] ***    and potentially your MPI job)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    sunpc1 fd1026 108
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    linpc1 fd1026 105 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    compiler absolute&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          OPAL repo revision: v2.x-dev-1290-gbd0e4e1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    linpc1 fd1026 106 uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Linux linpc1 3.1.10-1.29-desktop #1 SMP PREEMPT Fri May 31 20:10:04 UTC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    2013 (2529847) x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    linpc1 fd1026 107 mpiexec -np 1 --host linpc1,linpc1,linpc1,linpc1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    spawn_multiple_master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Parent process 0 running on linpc1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      I create 3 slave processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [linpc1:21502] PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at line 829
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [linpc1:21502] PMIX ERROR: UNPACK-PAST-END in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at line 2176
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [linpc1:21507] *** An error occurred in MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [linpc1:21507] *** reported by process [1005518849,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [linpc1:21507] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [linpc1:21507] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [linpc1:21507] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    will now abort,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [linpc1:21507] ***    and potentially your MPI job)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    linpc1 fd1026 108
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I used the following configure command.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../openmpi-v2.x-dev-1290-gbd0e4e1/configure \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --prefix=/usr/local/openmpi-2.0.0_64_gcc \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --enable-mpi-cxx \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --enable-cxx-exceptions \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --enable-mpi-java \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --enable-heterogeneous \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --with-hwloc=internal \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --without-verbs \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      --enable-debug \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Am 27.04.2016 um 13:21 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Siegmar,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    please add this to your CFLAGS for the time being.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    configure tries to detect which flags must be added for C99 support,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    and it seems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    the test is not working for Solaris 10 and Oracle compilers.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    this is no more a widely used environment, and I am not sure I can find
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    time to fix this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    in a near future.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    regarding the runtime issue, can you please describe your 4 hosts (os,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    endianness and bitness)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    On Wednesday, April 27, 2016, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;siegmar.gross_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;javascript:_e(%7B%7D,'cvml','siegmar.gross_at_[hidden] &lt;&gt;');&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;javascript:_e(%7B%7D,'cvml','siegmar.gross_at_[hidden] &lt;&gt;');&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Hi Gilles,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        adding &quot;-std=c99&quot; to CFLAGS solves the problem with the missing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    library.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Shall I add it permanently to my configure command or will you add it,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        so that I will not run into problems if you need the C11 standard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    later?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &quot;spawn_multiple_master&quot; breaks with the same error that I reported
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        yesterday for my gcc-version of Open MPI. Hopefully you can solve the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        problem as well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Kind regards and thank you very much for your help
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Am 27.04.2016 um 08:05 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Siegmar,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            here is the error :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            configure:17969: cc -o conftest -m64 -D_REENTRANT -g  -g
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            -D_REENTRANT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -I/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            &quot;/usr/include/stdbool.h&quot;, line 42: #error: &quot;Use of &lt;stdbool.h&gt; is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            valid only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            in a c99 compilation environment.&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            i cannot reproduce this on solaris 11 with oracle studio 5.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    compiler,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            and i
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            do not have solaris 10 yet.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            could you please re-configure with '-std=c99' appended to your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CFLAGS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            and see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            if it helps ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            On 4/26/2016 7:57 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Hi Gilles and Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                I was able to sort out my mess. In my last email I compared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                files from &quot;SunOS_sparc/openmpi-2.0.0_64_gcc/lib64/openmpi&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                the attachment of my email to Ralph with the files from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &quot;SunOS_sparc/openmpi-2.0.0_64_cc/lib64/openmpi&quot; from my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                file system. That's the reason while I have had different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                timestamps. The other problem was that Ralph didn't recognize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                that &quot;mca_pmix_pmix112.so&quot; wasn't built on Solaris with the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Sun C compiler. I've removed most of the files from the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    attachment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                of my email so that it is easier to see the relevant files.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Below
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                I try to give you more information that may be relevant to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    track
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                down the problem. I still get an error running one of my small
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                test programs, when I use my gcc-version of Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &quot;mca_pmix_pmix112.so&quot; is a 64 bits library.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Linux_x86_64/openmpi-2.0.0_64_cc/lib64/openmpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root  261327 Apr 19 16:46 mca_plm_slurm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root    1002 Apr 19 16:45
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pmix_pmix112.la &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root 3906526 Apr 19 16:45
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pmix_pmix112.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root     966 Apr 19 16:51 mca_pml_cm.la &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root 1574265 Apr 19 16:51 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Linux_x86_64/openmpi-2.0.0_64_gcc/lib64/openmpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root   70371 Apr 19 16:43 mca_plm_slurm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root    1008 Apr 19 16:42
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pmix_pmix112.la &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root 1029005 Apr 19 16:42
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pmix_pmix112.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root     972 Apr 19 16:46 mca_pml_cm.la &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root  284858 Apr 19 16:46 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                SunOS_sparc/openmpi-2.0.0_64_cc/lib64/openmpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root  319816 Apr 19 19:58 mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root     970 Apr 19 20:00 mca_pml_cm.la &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root 1507440 Apr 19 20:00 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                SunOS_sparc/openmpi-2.0.0_64_gcc/lib64/openmpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root  153280 Apr 19 19:49 mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root    1007 Apr 19 19:47
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pmix_pmix112.la &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root 1400512 Apr 19 19:47
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pmix_pmix112.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root     971 Apr 19 19:52 mca_pml_cm.la &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root  342440 Apr 19 19:52 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                SunOS_x86_64/openmpi-2.0.0_64_cc/lib64/openmpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root  300096 Apr 19 17:18 mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root     970 Apr 19 17:23 mca_pml_cm.la &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root 1458816 Apr 19 17:23 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                SunOS_x86_64/openmpi-2.0.0_64_gcc/lib64/openmpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root  133096 Apr 19 17:42 mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root    1007 Apr 19 17:41
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pmix_pmix112.la &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root 1320240 Apr 19 17:41
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pmix_pmix112.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root     971 Apr 19 17:46 mca_pml_cm.la &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rwxr-xr-x 1 root root  419848 Apr 19 17:46 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Yesterday I've installed openmpi-v2.x-dev-1290-gbd0e4e1 so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    that we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                have a current version for the investigation of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    problem. Once
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                more mca_pmix_pmix112.so isn't available on Solaris if I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Sun C compiler.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &quot;config.log&quot; for gcc-5.1.0 shows the following.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:127799: /bin/bash
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    '../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                pmix/configure' succeeded for opal/mca/pmix/pmix112/pmix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:127916: checking if MCA component pmix:pmix112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    can compile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:127918: result: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:5637: --- MCA component pmix:external (m4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    configuration
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                macro)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:128523: checking for MCA component pmix:external
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    compile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mode
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:128529: result: dso
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:129054: checking if MCA component pmix:external
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    can compile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:129056: result: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3897: creating opal/mca/pmix/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3897: creating opal/mca/pmix/s1/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3897: creating opal/mca/pmix/cray/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3897: creating opal/mca/pmix/s2/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3897: creating opal/mca/pmix/pmix112/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3897: creating opal/mca/pmix/external/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_cray_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_cray_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_external_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_external_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_pmix112_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_pmix112_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_s1_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_s1_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_s2_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_s2_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_FRAMEWORKS='common  allocator backtrace btl dl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    event hwloc if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                installdirs memchecker memcpy memory mpool pmix pstat
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    rcache sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                shmem timer'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_FRAMEWORKS_SUBDIRS='mca/common  mca/allocator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/backtrace mca/btl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/dl mca/event mca/hwloc mca/if mca/installdirs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/memchecker
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/memcpy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/memory mca/mpool mca/pmix mca/pstat mca/rcache mca/sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/shmem mca/timer'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS='$(MCA_opal_common_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_allocator_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_backtrace_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_btl_ALL_SUBDIRS) $(MCA_opal_dl_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_event_ALL_SUBDIRS) $(MCA_opal_hwloc_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_if_ALL_SUBDIRS) $(MCA_opal_installdirs_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memchecker_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_memcpy_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memory_ALL_SUBDIRS) $(MCA_opal_mpool_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pmix_ALL_SUBDIRS) $(MCA_opal_pstat_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_rcache_ALL_SUBDIRS) $(MCA_opal_sec_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_shmem_ALL_SUBDIRS) $(MCA_opal_timer_ALL_SUBDIRS)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS='$(MCA_opal_common_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_allocator_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_backtrace_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_btl_DSO_SUBDIRS) $(MCA_opal_dl_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_event_DSO_SUBDIRS) $(MCA_opal_hwloc_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_if_DSO_SUBDIRS) $(MCA_opal_installdirs_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memchecker_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_memcpy_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memory_DSO_SUBDIRS) $(MCA_opal_mpool_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pmix_DSO_SUBDIRS) $(MCA_opal_pstat_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_rcache_DSO_SUBDIRS) $(MCA_opal_sec_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_shmem_DSO_SUBDIRS) $(MCA_opal_timer_DSO_SUBDIRS)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS='$(MCA_opal_common_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 $(MCA_opal_allocator_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_backtrace_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_btl_STATIC_SUBDIRS) $(MCA_opal_dl_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_event_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_hwloc_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_if_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_installdirs_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memchecker_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memcpy_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memory_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_mpool_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pmix_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_pstat_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_rcache_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_sec_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_shmem_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_timer_STATIC_SUBDIRS)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_FRAMEWORK_LIBS=' $(MCA_opal_common_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/allocator/libmca_allocator.la &lt;<a href="http://libmca_allocator.la/">http://libmca_allocator.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_allocator.la">http://libmca_allocator.la</a> &lt;<a href="http://libmca_allocator.la/">http://libmca_allocator.la/</a>&gt;&gt; &lt;<a href="http://libmca_allocator.la">http://libmca_allocator.la</a> &lt;<a href="http://libmca_allocator.la/">http://libmca_allocator.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_allocator.la">http://libmca_allocator.la</a> &lt;<a href="http://libmca_allocator.la/">http://libmca_allocator.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_allocator_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/backtrace/libmca_backtrace.la &lt;<a href="http://libmca_backtrace.la/">http://libmca_backtrace.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_backtrace.la">http://libmca_backtrace.la</a> &lt;<a href="http://libmca_backtrace.la/">http://libmca_backtrace.la/</a>&gt;&gt; &lt;<a href="http://libmca_backtrace.la">http://libmca_backtrace.la</a> &lt;<a href="http://libmca_backtrace.la/">http://libmca_backtrace.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_backtrace.la">http://libmca_backtrace.la</a> &lt;<a href="http://libmca_backtrace.la/">http://libmca_backtrace.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_backtrace_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/btl/libmca_btl.la &lt;<a href="http://libmca_btl.la/">http://libmca_btl.la/</a>&gt; &lt;<a href="http://libmca_btl.la">http://libmca_btl.la</a> &lt;<a href="http://libmca_btl.la/">http://libmca_btl.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_btl.la">http://libmca_btl.la</a> &lt;<a href="http://libmca_btl.la/">http://libmca_btl.la/</a>&gt;&gt; &lt;<a href="http://libmca_btl.la">http://libmca_btl.la</a> &lt;<a href="http://libmca_btl.la/">http://libmca_btl.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_btl_STATIC_LTLIBS) mca/dl/libmca_dl.la &lt;<a href="http://libmca_dl.la/">http://libmca_dl.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_dl.la">http://libmca_dl.la</a> &lt;<a href="http://libmca_dl.la/">http://libmca_dl.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_dl.la">http://libmca_dl.la</a> &lt;<a href="http://libmca_dl.la/">http://libmca_dl.la/</a>&gt;&gt; &lt;<a href="http://libmca_dl.la">http://libmca_dl.la</a> &lt;<a href="http://libmca_dl.la/">http://libmca_dl.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_dl_STATIC_LTLIBS) mca/event/libmca_event.la &lt;<a href="http://libmca_event.la/">http://libmca_event.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_event.la">http://libmca_event.la</a> &lt;<a href="http://libmca_event.la/">http://libmca_event.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_event.la">http://libmca_event.la</a> &lt;<a href="http://libmca_event.la/">http://libmca_event.la/</a>&gt;&gt; &lt;<a href="http://libmca_event.la">http://libmca_event.la</a> &lt;<a href="http://libmca_event.la/">http://libmca_event.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_event_STATIC_LTLIBS) mca/hwloc/libmca_hwloc.la &lt;<a href="http://libmca_hwloc.la/">http://libmca_hwloc.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_hwloc.la">http://libmca_hwloc.la</a> &lt;<a href="http://libmca_hwloc.la/">http://libmca_hwloc.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_hwloc.la">http://libmca_hwloc.la</a> &lt;<a href="http://libmca_hwloc.la/">http://libmca_hwloc.la/</a>&gt;&gt; &lt;<a href="http://libmca_hwloc.la">http://libmca_hwloc.la</a> &lt;<a href="http://libmca_hwloc.la/">http://libmca_hwloc.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_hwloc_STATIC_LTLIBS) mca/if/libmca_if.la &lt;<a href="http://libmca_if.la/">http://libmca_if.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_if.la">http://libmca_if.la</a> &lt;<a href="http://libmca_if.la/">http://libmca_if.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_if.la">http://libmca_if.la</a> &lt;<a href="http://libmca_if.la/">http://libmca_if.la/</a>&gt;&gt; &lt;<a href="http://libmca_if.la">http://libmca_if.la</a> &lt;<a href="http://libmca_if.la/">http://libmca_if.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_if_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/installdirs/libmca_installdirs.la &lt;<a href="http://libmca_installdirs.la/">http://libmca_installdirs.la/</a>&gt; &lt;<a href="http://libmca_installdirs.la">http://libmca_installdirs.la</a> &lt;<a href="http://libmca_installdirs.la/">http://libmca_installdirs.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_installdirs.la">http://libmca_installdirs.la</a> &lt;<a href="http://libmca_installdirs.la/">http://libmca_installdirs.la/</a>&gt;&gt; &lt;<a href="http://libmca_installdirs.la">http://libmca_installdirs.la</a> &lt;<a href="http://libmca_installdirs.la/">http://libmca_installdirs.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_installdirs_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/memchecker/libmca_memchecker.la &lt;<a href="http://libmca_memchecker.la/">http://libmca_memchecker.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_memchecker.la">http://libmca_memchecker.la</a> &lt;<a href="http://libmca_memchecker.la/">http://libmca_memchecker.la/</a>&gt;&gt; &lt;<a href="http://libmca_memchecker.la">http://libmca_memchecker.la</a> &lt;<a href="http://libmca_memchecker.la/">http://libmca_memchecker.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_memchecker.la">http://libmca_memchecker.la</a> &lt;<a href="http://libmca_memchecker.la/">http://libmca_memchecker.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memchecker_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/memcpy/libmca_memcpy.la &lt;<a href="http://libmca_memcpy.la/">http://libmca_memcpy.la/</a>&gt; &lt;<a href="http://libmca_memcpy.la">http://libmca_memcpy.la</a> &lt;<a href="http://libmca_memcpy.la/">http://libmca_memcpy.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_memcpy.la">http://libmca_memcpy.la</a> &lt;<a href="http://libmca_memcpy.la/">http://libmca_memcpy.la/</a>&gt;&gt; &lt;<a href="http://libmca_memcpy.la">http://libmca_memcpy.la</a> &lt;<a href="http://libmca_memcpy.la/">http://libmca_memcpy.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memcpy_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/memory/libmca_memory.la &lt;<a href="http://libmca_memory.la/">http://libmca_memory.la/</a>&gt; &lt;<a href="http://libmca_memory.la">http://libmca_memory.la</a> &lt;<a href="http://libmca_memory.la/">http://libmca_memory.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_memory.la">http://libmca_memory.la</a> &lt;<a href="http://libmca_memory.la/">http://libmca_memory.la/</a>&gt;&gt; &lt;<a href="http://libmca_memory.la">http://libmca_memory.la</a> &lt;<a href="http://libmca_memory.la/">http://libmca_memory.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memory_STATIC_LTLIBS) mca/mpool/libmca_mpool.la &lt;<a href="http://libmca_mpool.la/">http://libmca_mpool.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_mpool.la">http://libmca_mpool.la</a> &lt;<a href="http://libmca_mpool.la/">http://libmca_mpool.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_mpool.la">http://libmca_mpool.la</a> &lt;<a href="http://libmca_mpool.la/">http://libmca_mpool.la/</a>&gt;&gt; &lt;<a href="http://libmca_mpool.la">http://libmca_mpool.la</a> &lt;<a href="http://libmca_mpool.la/">http://libmca_mpool.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_mpool_STATIC_LTLIBS) mca/pmix/libmca_pmix.la &lt;<a href="http://libmca_pmix.la/">http://libmca_pmix.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_pmix.la">http://libmca_pmix.la</a> &lt;<a href="http://libmca_pmix.la/">http://libmca_pmix.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_pmix.la">http://libmca_pmix.la</a> &lt;<a href="http://libmca_pmix.la/">http://libmca_pmix.la/</a>&gt;&gt; &lt;<a href="http://libmca_pmix.la">http://libmca_pmix.la</a> &lt;<a href="http://libmca_pmix.la/">http://libmca_pmix.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pmix_STATIC_LTLIBS) mca/pstat/libmca_pstat.la &lt;<a href="http://libmca_pstat.la/">http://libmca_pstat.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_pstat.la">http://libmca_pstat.la</a> &lt;<a href="http://libmca_pstat.la/">http://libmca_pstat.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_pstat.la">http://libmca_pstat.la</a> &lt;<a href="http://libmca_pstat.la/">http://libmca_pstat.la/</a>&gt;&gt; &lt;<a href="http://libmca_pstat.la">http://libmca_pstat.la</a> &lt;<a href="http://libmca_pstat.la/">http://libmca_pstat.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pstat_STATIC_LTLIBS) mca/rcache/libmca_rcache.la &lt;<a href="http://libmca_rcache.la/">http://libmca_rcache.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_rcache.la">http://libmca_rcache.la</a> &lt;<a href="http://libmca_rcache.la/">http://libmca_rcache.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_rcache.la">http://libmca_rcache.la</a> &lt;<a href="http://libmca_rcache.la/">http://libmca_rcache.la/</a>&gt;&gt; &lt;<a href="http://libmca_rcache.la">http://libmca_rcache.la</a> &lt;<a href="http://libmca_rcache.la/">http://libmca_rcache.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_rcache_STATIC_LTLIBS) mca/sec/libmca_sec.la &lt;<a href="http://libmca_sec.la/">http://libmca_sec.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_sec.la">http://libmca_sec.la</a> &lt;<a href="http://libmca_sec.la/">http://libmca_sec.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_sec.la">http://libmca_sec.la</a> &lt;<a href="http://libmca_sec.la/">http://libmca_sec.la/</a>&gt;&gt; &lt;<a href="http://libmca_sec.la">http://libmca_sec.la</a> &lt;<a href="http://libmca_sec.la/">http://libmca_sec.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_sec_STATIC_LTLIBS) mca/shmem/libmca_shmem.la &lt;<a href="http://libmca_shmem.la/">http://libmca_shmem.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_shmem.la">http://libmca_shmem.la</a> &lt;<a href="http://libmca_shmem.la/">http://libmca_shmem.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_shmem.la">http://libmca_shmem.la</a> &lt;<a href="http://libmca_shmem.la/">http://libmca_shmem.la/</a>&gt;&gt; &lt;<a href="http://libmca_shmem.la">http://libmca_shmem.la</a> &lt;<a href="http://libmca_shmem.la/">http://libmca_shmem.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_shmem_STATIC_LTLIBS) mca/timer/libmca_timer.la &lt;<a href="http://libmca_timer.la/">http://libmca_timer.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_timer.la">http://libmca_timer.la</a> &lt;<a href="http://libmca_timer.la/">http://libmca_timer.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_timer.la">http://libmca_timer.la</a> &lt;<a href="http://libmca_timer.la/">http://libmca_timer.la/</a>&gt;&gt; &lt;<a href="http://libmca_timer.la">http://libmca_timer.la</a> &lt;<a href="http://libmca_timer.la/">http://libmca_timer.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_timer_STATIC_LTLIBS)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_ALL_COMPONENTS=' s1 cray s2 pmix112 external'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_ALL_SUBDIRS=' mca/pmix/s1 mca/pmix/cray
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/pmix/s2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/pmix/pmix112 mca/pmix/external'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_DSO_COMPONENTS=' pmix112'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_DSO_SUBDIRS=' mca/pmix/pmix112'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                opal_pmix_ext_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                opal_pmix_ext_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                opal_pmix_ext_LIBS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    opal_pmix_pmix112_CPPFLAGS='-I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/include/pmix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -I$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -I$(OPAL_TOP_SRCDIR)/opal/mca/pmix/pmix112/pmix'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    opal_pmix_pmix112_LIBS='$(OPAL_TOP_BUILDDIR)/opal/mca/pmix/pmix112/pmix/libpmix.la &lt;<a href="http://libpmix.la/">http://libpmix.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libpmix.la">http://libpmix.la</a> &lt;<a href="http://libpmix.la/">http://libpmix.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libpmix.la">http://libpmix.la</a> &lt;<a href="http://libpmix.la/">http://libpmix.la/</a>&gt;&gt; &lt;<a href="http://libpmix.la">http://libpmix.la</a> &lt;<a href="http://libpmix.la/">http://libpmix.la/</a>&gt;&gt;'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &quot;config.log&quot; for Sun C 5.13 shows the following.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:127803: /bin/bash
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    '../../../../../../openmpi-v2.x-dev-1290-gbd0e4e1/opal/mca/pmix/pmix112/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                pmix/configure' *failed* for opal/mca/pmix/pmix112/pmix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:128379: checking if MCA component pmix:pmix112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    can compile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:128381: result: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:5637: --- MCA component pmix:external (m4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    configuration
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                macro)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:128523: checking for MCA component pmix:external
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    compile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mode
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:128529: result: dso
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:129054: checking if MCA component pmix:external
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    can compile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                configure:129056: result: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3887: creating opal/mca/pmix/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3887: creating opal/mca/pmix/s1/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3887: creating opal/mca/pmix/cray/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3887: creating opal/mca/pmix/s2/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3887: creating opal/mca/pmix/pmix112/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                config.status:3887: creating opal/mca/pmix/external/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_cray_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_cray_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_external_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_external_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_pmix112_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_pmix112_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_s1_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_s1_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_s2_DSO_FALSE='#'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_BUILD_opal_pmix_s2_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_FRAMEWORKS='common  allocator backtrace btl dl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    event hwloc if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                installdirs memchecker memcpy memory mpool pmix pstat
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    rcache sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                shmem timer'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_FRAMEWORKS_SUBDIRS='mca/common  mca/allocator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/backtrace mca/btl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/dl mca/event mca/hwloc mca/if mca/installdirs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/memchecker
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/memcpy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/memory mca/mpool mca/pmix mca/pstat mca/rcache mca/sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/shmem mca/timer'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS='$(MCA_opal_common_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_allocator_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_backtrace_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_btl_ALL_SUBDIRS) $(MCA_opal_dl_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_event_ALL_SUBDIRS) $(MCA_opal_hwloc_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_if_ALL_SUBDIRS) $(MCA_opal_installdirs_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memchecker_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_memcpy_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memory_ALL_SUBDIRS) $(MCA_opal_mpool_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pmix_ALL_SUBDIRS) $(MCA_opal_pstat_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_rcache_ALL_SUBDIRS) $(MCA_opal_sec_ALL_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_shmem_ALL_SUBDIRS) $(MCA_opal_timer_ALL_SUBDIRS)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS='$(MCA_opal_common_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_allocator_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_backtrace_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_btl_DSO_SUBDIRS) $(MCA_opal_dl_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_event_DSO_SUBDIRS) $(MCA_opal_hwloc_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_if_DSO_SUBDIRS) $(MCA_opal_installdirs_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memchecker_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_memcpy_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memory_DSO_SUBDIRS) $(MCA_opal_mpool_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pmix_DSO_SUBDIRS) $(MCA_opal_pstat_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_rcache_DSO_SUBDIRS) $(MCA_opal_sec_DSO_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_shmem_DSO_SUBDIRS) $(MCA_opal_timer_DSO_SUBDIRS)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS='$(MCA_opal_common_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 $(MCA_opal_allocator_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_backtrace_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_btl_STATIC_SUBDIRS) $(MCA_opal_dl_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_event_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_hwloc_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_if_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_installdirs_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memchecker_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memcpy_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memory_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_mpool_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pmix_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_pstat_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_rcache_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_sec_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_shmem_STATIC_SUBDIRS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $(MCA_opal_timer_STATIC_SUBDIRS)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_FRAMEWORK_LIBS=' $(MCA_opal_common_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/allocator/libmca_allocator.la &lt;<a href="http://libmca_allocator.la/">http://libmca_allocator.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_allocator.la">http://libmca_allocator.la</a> &lt;<a href="http://libmca_allocator.la/">http://libmca_allocator.la/</a>&gt;&gt; &lt;<a href="http://libmca_allocator.la">http://libmca_allocator.la</a> &lt;<a href="http://libmca_allocator.la/">http://libmca_allocator.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_allocator.la">http://libmca_allocator.la</a> &lt;<a href="http://libmca_allocator.la/">http://libmca_allocator.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_allocator_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/backtrace/libmca_backtrace.la &lt;<a href="http://libmca_backtrace.la/">http://libmca_backtrace.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_backtrace.la">http://libmca_backtrace.la</a> &lt;<a href="http://libmca_backtrace.la/">http://libmca_backtrace.la/</a>&gt;&gt; &lt;<a href="http://libmca_backtrace.la">http://libmca_backtrace.la</a> &lt;<a href="http://libmca_backtrace.la/">http://libmca_backtrace.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_backtrace.la">http://libmca_backtrace.la</a> &lt;<a href="http://libmca_backtrace.la/">http://libmca_backtrace.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_backtrace_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/btl/libmca_btl.la &lt;<a href="http://libmca_btl.la/">http://libmca_btl.la/</a>&gt; &lt;<a href="http://libmca_btl.la">http://libmca_btl.la</a> &lt;<a href="http://libmca_btl.la/">http://libmca_btl.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_btl.la">http://libmca_btl.la</a> &lt;<a href="http://libmca_btl.la/">http://libmca_btl.la/</a>&gt;&gt; &lt;<a href="http://libmca_btl.la">http://libmca_btl.la</a> &lt;<a href="http://libmca_btl.la/">http://libmca_btl.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_btl_STATIC_LTLIBS) mca/dl/libmca_dl.la &lt;<a href="http://libmca_dl.la/">http://libmca_dl.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_dl.la">http://libmca_dl.la</a> &lt;<a href="http://libmca_dl.la/">http://libmca_dl.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_dl.la">http://libmca_dl.la</a> &lt;<a href="http://libmca_dl.la/">http://libmca_dl.la/</a>&gt;&gt; &lt;<a href="http://libmca_dl.la">http://libmca_dl.la</a> &lt;<a href="http://libmca_dl.la/">http://libmca_dl.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_dl_STATIC_LTLIBS) mca/event/libmca_event.la &lt;<a href="http://libmca_event.la/">http://libmca_event.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_event.la">http://libmca_event.la</a> &lt;<a href="http://libmca_event.la/">http://libmca_event.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_event.la">http://libmca_event.la</a> &lt;<a href="http://libmca_event.la/">http://libmca_event.la/</a>&gt;&gt; &lt;<a href="http://libmca_event.la">http://libmca_event.la</a> &lt;<a href="http://libmca_event.la/">http://libmca_event.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_event_STATIC_LTLIBS) mca/hwloc/libmca_hwloc.la &lt;<a href="http://libmca_hwloc.la/">http://libmca_hwloc.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_hwloc.la">http://libmca_hwloc.la</a> &lt;<a href="http://libmca_hwloc.la/">http://libmca_hwloc.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_hwloc.la">http://libmca_hwloc.la</a> &lt;<a href="http://libmca_hwloc.la/">http://libmca_hwloc.la/</a>&gt;&gt; &lt;<a href="http://libmca_hwloc.la">http://libmca_hwloc.la</a> &lt;<a href="http://libmca_hwloc.la/">http://libmca_hwloc.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_hwloc_STATIC_LTLIBS) mca/if/libmca_if.la &lt;<a href="http://libmca_if.la/">http://libmca_if.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_if.la">http://libmca_if.la</a> &lt;<a href="http://libmca_if.la/">http://libmca_if.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_if.la">http://libmca_if.la</a> &lt;<a href="http://libmca_if.la/">http://libmca_if.la/</a>&gt;&gt; &lt;<a href="http://libmca_if.la">http://libmca_if.la</a> &lt;<a href="http://libmca_if.la/">http://libmca_if.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_if_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/installdirs/libmca_installdirs.la &lt;<a href="http://libmca_installdirs.la/">http://libmca_installdirs.la/</a>&gt; &lt;<a href="http://libmca_installdirs.la">http://libmca_installdirs.la</a> &lt;<a href="http://libmca_installdirs.la/">http://libmca_installdirs.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_installdirs.la">http://libmca_installdirs.la</a> &lt;<a href="http://libmca_installdirs.la/">http://libmca_installdirs.la/</a>&gt;&gt; &lt;<a href="http://libmca_installdirs.la">http://libmca_installdirs.la</a> &lt;<a href="http://libmca_installdirs.la/">http://libmca_installdirs.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_installdirs_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/memchecker/libmca_memchecker.la &lt;<a href="http://libmca_memchecker.la/">http://libmca_memchecker.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_memchecker.la">http://libmca_memchecker.la</a> &lt;<a href="http://libmca_memchecker.la/">http://libmca_memchecker.la/</a>&gt;&gt; &lt;<a href="http://libmca_memchecker.la">http://libmca_memchecker.la</a> &lt;<a href="http://libmca_memchecker.la/">http://libmca_memchecker.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_memchecker.la">http://libmca_memchecker.la</a> &lt;<a href="http://libmca_memchecker.la/">http://libmca_memchecker.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memchecker_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/memcpy/libmca_memcpy.la &lt;<a href="http://libmca_memcpy.la/">http://libmca_memcpy.la/</a>&gt; &lt;<a href="http://libmca_memcpy.la">http://libmca_memcpy.la</a> &lt;<a href="http://libmca_memcpy.la/">http://libmca_memcpy.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_memcpy.la">http://libmca_memcpy.la</a> &lt;<a href="http://libmca_memcpy.la/">http://libmca_memcpy.la/</a>&gt;&gt; &lt;<a href="http://libmca_memcpy.la">http://libmca_memcpy.la</a> &lt;<a href="http://libmca_memcpy.la/">http://libmca_memcpy.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memcpy_STATIC_LTLIBS)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/memory/libmca_memory.la &lt;<a href="http://libmca_memory.la/">http://libmca_memory.la/</a>&gt; &lt;<a href="http://libmca_memory.la">http://libmca_memory.la</a> &lt;<a href="http://libmca_memory.la/">http://libmca_memory.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_memory.la">http://libmca_memory.la</a> &lt;<a href="http://libmca_memory.la/">http://libmca_memory.la/</a>&gt;&gt; &lt;<a href="http://libmca_memory.la">http://libmca_memory.la</a> &lt;<a href="http://libmca_memory.la/">http://libmca_memory.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_memory_STATIC_LTLIBS) mca/mpool/libmca_mpool.la &lt;<a href="http://libmca_mpool.la/">http://libmca_mpool.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_mpool.la">http://libmca_mpool.la</a> &lt;<a href="http://libmca_mpool.la/">http://libmca_mpool.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_mpool.la">http://libmca_mpool.la</a> &lt;<a href="http://libmca_mpool.la/">http://libmca_mpool.la/</a>&gt;&gt; &lt;<a href="http://libmca_mpool.la">http://libmca_mpool.la</a> &lt;<a href="http://libmca_mpool.la/">http://libmca_mpool.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_mpool_STATIC_LTLIBS) mca/pmix/libmca_pmix.la &lt;<a href="http://libmca_pmix.la/">http://libmca_pmix.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_pmix.la">http://libmca_pmix.la</a> &lt;<a href="http://libmca_pmix.la/">http://libmca_pmix.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_pmix.la">http://libmca_pmix.la</a> &lt;<a href="http://libmca_pmix.la/">http://libmca_pmix.la/</a>&gt;&gt; &lt;<a href="http://libmca_pmix.la">http://libmca_pmix.la</a> &lt;<a href="http://libmca_pmix.la/">http://libmca_pmix.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pmix_STATIC_LTLIBS) mca/pstat/libmca_pstat.la &lt;<a href="http://libmca_pstat.la/">http://libmca_pstat.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_pstat.la">http://libmca_pstat.la</a> &lt;<a href="http://libmca_pstat.la/">http://libmca_pstat.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_pstat.la">http://libmca_pstat.la</a> &lt;<a href="http://libmca_pstat.la/">http://libmca_pstat.la/</a>&gt;&gt; &lt;<a href="http://libmca_pstat.la">http://libmca_pstat.la</a> &lt;<a href="http://libmca_pstat.la/">http://libmca_pstat.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_pstat_STATIC_LTLIBS) mca/rcache/libmca_rcache.la &lt;<a href="http://libmca_rcache.la/">http://libmca_rcache.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_rcache.la">http://libmca_rcache.la</a> &lt;<a href="http://libmca_rcache.la/">http://libmca_rcache.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_rcache.la">http://libmca_rcache.la</a> &lt;<a href="http://libmca_rcache.la/">http://libmca_rcache.la/</a>&gt;&gt; &lt;<a href="http://libmca_rcache.la">http://libmca_rcache.la</a> &lt;<a href="http://libmca_rcache.la/">http://libmca_rcache.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_rcache_STATIC_LTLIBS) mca/sec/libmca_sec.la &lt;<a href="http://libmca_sec.la/">http://libmca_sec.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_sec.la">http://libmca_sec.la</a> &lt;<a href="http://libmca_sec.la/">http://libmca_sec.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_sec.la">http://libmca_sec.la</a> &lt;<a href="http://libmca_sec.la/">http://libmca_sec.la/</a>&gt;&gt; &lt;<a href="http://libmca_sec.la">http://libmca_sec.la</a> &lt;<a href="http://libmca_sec.la/">http://libmca_sec.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_sec_STATIC_LTLIBS) mca/shmem/libmca_shmem.la &lt;<a href="http://libmca_shmem.la/">http://libmca_shmem.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_shmem.la">http://libmca_shmem.la</a> &lt;<a href="http://libmca_shmem.la/">http://libmca_shmem.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_shmem.la">http://libmca_shmem.la</a> &lt;<a href="http://libmca_shmem.la/">http://libmca_shmem.la/</a>&gt;&gt; &lt;<a href="http://libmca_shmem.la">http://libmca_shmem.la</a> &lt;<a href="http://libmca_shmem.la/">http://libmca_shmem.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_shmem_STATIC_LTLIBS) mca/timer/libmca_timer.la &lt;<a href="http://libmca_timer.la/">http://libmca_timer.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://libmca_timer.la">http://libmca_timer.la</a> &lt;<a href="http://libmca_timer.la/">http://libmca_timer.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &lt;<a href="http://libmca_timer.la">http://libmca_timer.la</a> &lt;<a href="http://libmca_timer.la/">http://libmca_timer.la/</a>&gt;&gt; &lt;<a href="http://libmca_timer.la">http://libmca_timer.la</a> &lt;<a href="http://libmca_timer.la/">http://libmca_timer.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                $(MCA_opal_timer_STATIC_LTLIBS)'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_ALL_COMPONENTS=' s1 cray s2 pmix112 external'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_ALL_SUBDIRS=' mca/pmix/s1 mca/pmix/cray
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca/pmix/s2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                mca/pmix/pmix112 mca/pmix/external'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA_opal_pmix_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                opal_pmix_ext_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                opal_pmix_ext_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                opal_pmix_ext_LIBS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                opal_pmix_pmix112_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                opal_pmix_pmix112_LIBS=''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                I've attached the config.log files for pmix.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                tyr openmpi-2.0.0 142 tar zvft pmix_config.log.tar.gz
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rw-r--r-- root/root    136291 2016-04-25 08:05:34
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_cc/opal/mca/pmix/pmix112/pmix/config.log
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                -rw-r--r-- root/root    528808 2016-04-25 08:07:54
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    openmpi-v2.x-dev-1290-gbd0e4e1-SunOS.sparc.64_gcc/opal/mca/pmix/pmix112/pmix/config.log
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                tyr openmpi-2.0.0 143
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                I've also attached the output for the broken execution of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &quot;spawn_multiple_master&quot; for my gcc-version of Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &quot;spawn_master&quot; works as expected with my gcc-version of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Hopefully you can fix the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Kind regards and thank you very much for your help
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Am 23.04.2016 um 21:34 schrieb Siegmar Gross:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    Hi Gilles,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    I don't know what happened, but the files are not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    available now
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    and they were definitely available when I answered the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    email from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    Ralph. The files also have a different timestamp now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    This is an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    extract from my email to Ralph for Solaris Sparc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root     977 Apr 19 19:49
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_plm_rsh.la &lt;<a href="http://mca_plm_rsh.la/">http://mca_plm_rsh.la/</a>&gt; &lt;<a href="http://mca_plm_rsh.la">http://mca_plm_rsh.la</a> &lt;<a href="http://mca_plm_rsh.la/">http://mca_plm_rsh.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    &lt;<a href="http://mca_plm_rsh.la">http://mca_plm_rsh.la</a> &lt;<a href="http://mca_plm_rsh.la/">http://mca_plm_rsh.la/</a>&gt;&gt; &lt;<a href="http://mca_plm_rsh.la">http://mca_plm_rsh.la</a> &lt;<a href="http://mca_plm_rsh.la/">http://mca_plm_rsh.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root  153280 Apr 19 19:49 mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root    1007 Apr 19 19:47
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    mca_pmix_pmix112.la &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt; &lt;<a href="http://mca_pmix_pmix112.la">http://mca_pmix_pmix112.la</a> &lt;<a href="http://mca_pmix_pmix112.la/">http://mca_pmix_pmix112.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root 1400512 Apr 19 19:47
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pmix_pmix112.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root     971 Apr 19 19:52
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pml_cm.la &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root  342440 Apr 19 19:52 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    Now I have the following output for these files.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root     976 Apr 19 19:58
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_plm_rsh.la &lt;<a href="http://mca_plm_rsh.la/">http://mca_plm_rsh.la/</a>&gt; &lt;<a href="http://mca_plm_rsh.la">http://mca_plm_rsh.la</a> &lt;<a href="http://mca_plm_rsh.la/">http://mca_plm_rsh.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    &lt;<a href="http://mca_plm_rsh.la">http://mca_plm_rsh.la</a> &lt;<a href="http://mca_plm_rsh.la/">http://mca_plm_rsh.la/</a>&gt;&gt; &lt;<a href="http://mca_plm_rsh.la">http://mca_plm_rsh.la</a> &lt;<a href="http://mca_plm_rsh.la/">http://mca_plm_rsh.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root  319816 Apr 19 19:58 mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root     970 Apr 19 20:00
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mca_pml_cm.la &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt; &lt;<a href="http://mca_pml_cm.la">http://mca_pml_cm.la</a> &lt;<a href="http://mca_pml_cm.la/">http://mca_pml_cm.la/</a>&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    -rwxr-xr-x 1 root root 1507440 Apr 19 20:00 mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    I'll try to find out what happened next week when I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    back in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    my office.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    Kind regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    Am 23.04.16 um 02:12 schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        Siegmar,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        I will try to reproduce this on my solaris11 x86_64 vm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        In the mean time, can you please double check
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        mca_pmix_pmix_pmix112.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        is a 64 bits library ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        (E.g, confirm &quot;-m64&quot; was correctly passed to pmix)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        On Friday, April 22, 2016, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        &lt;siegmar.gross_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;javascript:_e(%7B%7D,'cvml','siegmar.gross_at_[hidden] &lt;&gt;');&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        &lt;mailto:siegmar.gross_at_[hidden] &lt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;javascript:_e(%7B%7D,'cvml','siegmar.gross_at_[hidden] &lt;&gt;');&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            Hi Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            I've already used &quot;-enable-debug&quot;. &quot;SYSTEM_ENV&quot; is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                        &quot;SunOS&quot; or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            &quot;Linux&quot; and &quot;MACHINE_ENV&quot; is &quot;sparc&quot; or &quot;x86_84&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            mkdir
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            cd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    openmpi-v2.x-dev-1280-gc110ae8-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            ../openmpi-v2.x-dev-1280-gc110ae8/configure \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                              --prefix=/usr/local/openmpi-2.0.0_64_gcc \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                              --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                              --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                              --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                              JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                              LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                              CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29051.php">http://www.open-mpi.org/community/lists/users/2016/04/29051.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29051.php">http://www.open-mpi.org/community/lists/users/2016/04/29051.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29053.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="29051.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>In reply to:</strong> <a href="29051.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29053.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Reply:</strong> <a href="29053.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
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
