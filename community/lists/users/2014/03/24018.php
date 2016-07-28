<?
$subject_val = "Re: [OMPI users] How to replace --cpus-per-proc by --map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 16:53:25 2014" -->
<!-- isoreceived="20140328205325" -->
<!-- sent="Fri, 28 Mar 2014 13:53:21 -0700" -->
<!-- isosent="20140328205321" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to replace --cpus-per-proc by --map-by" -->
<!-- id="124B8A5E-DC4F-4380-B2A9-138E86477F02_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="533450CD.4050909_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to replace --cpus-per-proc by --map-by<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 16:53:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24019.php">W Spector: "[OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>Previous message:</strong> <a href="24017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23989.php">Gus Correa: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You make a good point, Gus - let me throw the thread open for suggestions on how to resolve that problem. We've heard similar concerns raised about other features we've added to OMPI over the years, but I'm not sure of the best way to communicate such information.
<br>
<p>Do we need a better web page, perhaps with some areas dedicated to &quot;features&quot;?
<br>
<p>Should we send out &quot;tip of the day&quot; messages to the user list?
<br>
<p>Other ideas?
<br>
<p>We're open to suggestion, really - just need some help identifying the best way to get this info out there.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Mar 27, 2014, at 9:24 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &lt;\begin hijacking this thread&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I second Saliya's thanks to Tetsuya.
</span><br>
<span class="quotelev1">&gt; I've been following this thread, to learn a bit more about
</span><br>
<span class="quotelev1">&gt; how to use hardware locality with OpenMPI effectively.
</span><br>
<span class="quotelev1">&gt; [I am still using &quot;--bycore&quot;+&quot;--bind-to-core&quot; in most cases,
</span><br>
<span class="quotelev1">&gt; and &quot;--cpus-per-proc&quot; occasionally when in hybrid MPI+OpenMP mode.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When it comes to hardware locality,
</span><br>
<span class="quotelev1">&gt; the syntax and the functionality has changed fast and significantly
</span><br>
<span class="quotelev1">&gt; in the recent past.
</span><br>
<span class="quotelev1">&gt; Hence, it would be great if the OpenMPI web page could provide pointers
</span><br>
<span class="quotelev1">&gt; for the type of external documentation that Tetsuya just sent.
</span><br>
<span class="quotelev1">&gt; Perhaps also some additional guidelines and comments
</span><br>
<span class="quotelev1">&gt; on what is available on each release/series of OpenMPI,
</span><br>
<span class="quotelev1">&gt; and how to use these options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is some material about hwloc,
</span><br>
<span class="quotelev1">&gt; but I can't see much about lama ( which means &quot;mud&quot; in my
</span><br>
<span class="quotelev1">&gt; first language :) ).
</span><br>
<span class="quotelev1">&gt; We can hardly learn things like that from the mpiexec man page
</span><br>
<span class="quotelev1">&gt; alone, although it has very good examples.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;\end hijacking of this thread&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/27/2014 11:38 AM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, this is really helpful.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Mar 27, 2014 at 5:11 AM, &lt;tmishima_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:tmishima_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Mapping and binding is related to so called process affinity.
</span><br>
<span class="quotelev2">&gt;&gt;    It's a bit difficult for me to explain ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    So please see this URL below(especially the first half part
</span><br>
<span class="quotelev2">&gt;&gt;    of it - from 1 to 20 pages):
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Although these slides by Jeff are the explanation for LAMA,
</span><br>
<span class="quotelev2">&gt;&gt;    which is another mapping system installed in the openmpi-1.7
</span><br>
<span class="quotelev2">&gt;&gt;    series, I guess you can easily understand what is mapping and
</span><br>
<span class="quotelev2">&gt;&gt;    binding in general terms.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Tetsuya
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Thank you Tetsuya - it worked.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Btw. what's the difference between mapping and binding? I think I
</span><br>
<span class="quotelev2">&gt;&gt;    am bit
</span><br>
<span class="quotelev2">&gt;&gt;    confused here.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; On Thu, Mar 27, 2014 at 4:19 AM,  &lt;tmishima_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;mailto:tmishima_at_[hidden]&gt;&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Hi Saliya,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; What you want to do is map-by node. So please try below:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; -np 2 --map-by node:pe=4 --bind-to core
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; You might not need to add --bind-to core, because it's default
</span><br>
<span class="quotelev2">&gt;&gt;    binding.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Tetsuya
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; I see in v.1.7.5rc5 --cpus-per-proc is deprecated and is advised to
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; replace by --map-by &lt;obj&gt;:PE=N.
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; I've tried this but I couldn't get the expected allocation of
</span><br>
<span class="quotelev2">&gt;&gt;    procs.
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; For example I was running 2 procs on 2 nodes each with 2
</span><br>
<span class="quotelev2">&gt;&gt;    sockets where
</span><br>
<span class="quotelev2">&gt;&gt;    a
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; socket has 4 cores. I wanted 1 proc per node and bound to all
</span><br>
<span class="quotelev2">&gt;&gt;    cores in
</span><br>
<span class="quotelev2">&gt;&gt;    one
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; of the sockets. I could get this by using
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; --bind-to core: --map-by ppr:1:node --cpus-per-proc 4 -np 2
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; Then it'll show bindings as
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; [i51:32274] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev2">&gt;&gt;    0[core
</span><br>
<span class="quotelev2">&gt;&gt;    1
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; [hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; [B/B/B/B][./././.]
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; [i52:31765] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev2">&gt;&gt;    0[core
</span><br>
<span class="quotelev2">&gt;&gt;    1
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; [hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; [B/B/B/B][./././.]
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; Is there a better way without using -cpus-per-proc as suggested
</span><br>
<span class="quotelev2">&gt;&gt;    to get
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; the same effect?
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; Saliya
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; Cell 812-391-4914 &lt;tel:812-391-4914&gt; Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;tel:812-961-6383&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; <a href="http://saliya.org">http://saliya.org</a>_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;     &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Cell 812-391-4914 &lt;tel:812-391-4914&gt; Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;tel:812-961-6383&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://saliya.org">http://saliya.org</a>_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="24019.php">W Spector: "[OMPI users] Fortran MPI module and gfortran"</a>
<li><strong>Previous message:</strong> <a href="24017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23989.php">Gus Correa: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24386.php">Mark Hahn: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
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
