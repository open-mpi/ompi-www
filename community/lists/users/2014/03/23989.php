<?
$subject_val = "Re: [OMPI users] How to replace --cpus-per-proc by --map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 12:24:46 2014" -->
<!-- isoreceived="20140327162446" -->
<!-- sent="Thu, 27 Mar 2014 12:24:45 -0400" -->
<!-- isosent="20140327162445" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to replace --cpus-per-proc by --map-by" -->
<!-- id="533450CD.4050909_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKVb-Yx_6zeaZUpeB0pExK8YOh_210TD_5ThPBA1p0ZHgQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 12:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23990.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23988.php">Reuti: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23987.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23996.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="23996.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="24018.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;\begin hijacking this thread&gt;
<br>
<p>I second Saliya's thanks to Tetsuya.
<br>
I've been following this thread, to learn a bit more about
<br>
how to use hardware locality with OpenMPI effectively.
<br>
[I am still using &quot;--bycore&quot;+&quot;--bind-to-core&quot; in most cases,
<br>
and &quot;--cpus-per-proc&quot; occasionally when in hybrid MPI+OpenMP mode.]
<br>
<p>When it comes to hardware locality,
<br>
the syntax and the functionality has changed fast and significantly
<br>
in the recent past.
<br>
Hence, it would be great if the OpenMPI web page could provide pointers
<br>
for the type of external documentation that Tetsuya just sent.
<br>
Perhaps also some additional guidelines and comments
<br>
on what is available on each release/series of OpenMPI,
<br>
and how to use these options.
<br>
<p>There is some material about hwloc,
<br>
but I can't see much about lama ( which means &quot;mud&quot; in my
<br>
first language :) ).
<br>
We can hardly learn things like that from the mpiexec man page
<br>
alone, although it has very good examples.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p>&lt;\end hijacking of this thread&gt;
<br>
<p>On 03/27/2014 11:38 AM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Thank you, this is really helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 27, 2014 at 5:11 AM, &lt;tmishima_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:tmishima_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Mapping and binding is related to so called process affinity.
</span><br>
<span class="quotelev1">&gt;     It's a bit difficult for me to explain ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So please see this URL below(especially the first half part
</span><br>
<span class="quotelev1">&gt;     of it - from 1 to 20 pages):
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Although these slides by Jeff are the explanation for LAMA,
</span><br>
<span class="quotelev1">&gt;     which is another mapping system installed in the openmpi-1.7
</span><br>
<span class="quotelev1">&gt;     series, I guess you can easily understand what is mapping and
</span><br>
<span class="quotelev1">&gt;     binding in general terms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Tetsuya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Thank you Tetsuya - it worked.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Btw. what's the difference between mapping and binding? I think I
</span><br>
<span class="quotelev1">&gt;     am bit
</span><br>
<span class="quotelev1">&gt;     confused here.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Thank you,
</span><br>
<span class="quotelev2">&gt;      &gt; Saliya
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; On Thu, Mar 27, 2014 at 4:19 AM,  &lt;tmishima_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:tmishima_at_[hidden]&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Hi Saliya,
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; What you want to do is map-by node. So please try below:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; -np 2 --map-by node:pe=4 --bind-to core
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; You might not need to add --bind-to core, because it's default
</span><br>
<span class="quotelev1">&gt;     binding.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Tetsuya
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; I see in v.1.7.5rc5 --cpus-per-proc is deprecated and is advised to
</span><br>
<span class="quotelev2">&gt;      &gt; replace by --map-by &lt;obj&gt;:PE=N.
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; I've tried this but I couldn't get the expected allocation of
</span><br>
<span class="quotelev1">&gt;     procs.
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; For example I was running 2 procs on 2 nodes each with 2
</span><br>
<span class="quotelev1">&gt;     sockets where
</span><br>
<span class="quotelev1">&gt;     a
</span><br>
<span class="quotelev2">&gt;      &gt; socket has 4 cores. I wanted 1 proc per node and bound to all
</span><br>
<span class="quotelev1">&gt;     cores in
</span><br>
<span class="quotelev1">&gt;     one
</span><br>
<span class="quotelev2">&gt;      &gt; of the sockets. I could get this by using
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; --bind-to core: --map-by ppr:1:node --cpus-per-proc 4 -np 2
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Then it'll show bindings as
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; [i51:32274] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt;     0[core
</span><br>
<span class="quotelev1">&gt;     1
</span><br>
<span class="quotelev2">&gt;      &gt; [hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;      &gt; [B/B/B/B][./././.]
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; [i52:31765] MCW rank 1 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt;     0[core
</span><br>
<span class="quotelev1">&gt;     1
</span><br>
<span class="quotelev2">&gt;      &gt; [hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;      &gt; [B/B/B/B][./././.]
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Is there a better way without using -cpus-per-proc as suggested
</span><br>
<span class="quotelev1">&gt;     to get
</span><br>
<span class="quotelev2">&gt;      &gt; the same effect?
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Saliya
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; --
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Cell 812-391-4914 &lt;tel:812-391-4914&gt; Home 812-961-6383
</span><br>
<span class="quotelev1">&gt;     &lt;tel:812-961-6383&gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; <a href="http://saliya.org">http://saliya.org</a>_______________________________________________
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;      &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; --
</span><br>
<span class="quotelev2">&gt;      &gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Cell 812-391-4914 &lt;tel:812-391-4914&gt; Home 812-961-6383
</span><br>
<span class="quotelev1">&gt;     &lt;tel:812-961-6383&gt;
</span><br>
<span class="quotelev2">&gt;      &gt; <a href="http://saliya.org">http://saliya.org</a>_______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23990.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23988.php">Reuti: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23987.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23996.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="23996.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Reply:</strong> <a href="24018.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
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
