<?
$subject_val = "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  9 18:17:33 2012" -->
<!-- isoreceived="20120909221733" -->
<!-- sent="Mon, 10 Sep 2012 00:17:27 +0200" -->
<!-- isosent="20120909221727" -->
<!-- name="Andrea Negri" -->
<!-- email="negri.andre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="CAPUxaiQuMXnNPGca2FpqMR6MhxyWizm0HgsHLdW=OGaTdmLKqg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
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
<strong>Subject:</strong> Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers<br>
<strong>From:</strong> Andrea Negri (<em>negri.andre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-09 18:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="20125.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gus,
<br>
<p>I would like to thank you and all the guys for your interest and for
<br>
the wise advices.
<br>
Unfortunately, the cluster is currently off-line (I don't know why,
<br>
I'm just returned to the university), but I can ensure that it not the
<br>
same node that go south.
<br>
<p>In addition, last friday I was able to run my code for at least 6
<br>
hours, simply by putting only a process on each node.
<br>
<p>Finally, now I know that the RAM hardware was the orginal one of 8
<br>
years ago. Last but least, sometimes a kernel segfault appears (I
<br>
don't have the access to the log files, therefore I didn't know this
<br>
when I posted the thread).
<br>
<p>Tomorrow I'll start to do the diagnostic suggested.
<br>
Many thanks again!
<br>
<p>2012/9/8  &lt;users-request_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: problem with rankfile (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;    2. Re: some mpi processes &quot;disappear&quot; on a cluster of        servers
</span><br>
<span class="quotelev1">&gt;       (Gus Correa)
</span><br>
<span class="quotelev1">&gt;    3. Re: some mpi processes &quot;disappear&quot; on a cluster of        servers
</span><br>
<span class="quotelev1">&gt;       (Gus Correa)
</span><br>
<span class="quotelev1">&gt;    4. Re: MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)
</span><br>
<span class="quotelev1">&gt;       (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;    5. Setting RPATH for Open MPI libraries (Jed Brown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Fri, 7 Sep 2012 10:33:55 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] problem with rankfile
</span><br>
<span class="quotelev1">&gt; To: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;8C53F47D-B593-4994-931E-F746AC27B1F0_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 7, 2012, at 5:41 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; are the following outputs helpful to find the error with
</span><br>
<span class="quotelev2">&gt;&gt; a rankfile on Solaris?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can't bind on the new Solaris machine, then the rankfile won't do you any good. It looks like we are getting the incorrect number of cores on that machine - is it possible that it has hardware threads, and doesn't report &quot;cores&quot;? Can you download and run a copy of lstopo to check the output? You get that from the hwloc folks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/hwloc/v1.5/">http://www.open-mpi.org/software/hwloc/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wrapped long lines so that they
</span><br>
<span class="quotelev2">&gt;&gt; are easier to read. Have you had time to look at the
</span><br>
<span class="quotelev2">&gt;&gt; segmentation fault with a rankfile which I reported in my
</span><br>
<span class="quotelev2">&gt;&gt; last email (see below)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid not - been too busy lately. I'd suggest first focusing on getting binding to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;tyr&quot; is a two processor single core machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 116 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev2">&gt;&gt;  -bind-to-socket -bycore rank_size
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27298,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27298,1],1] to socket 1 cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27298,1],2] to socket 0 cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18614] [[27298,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27298,1],3] to socket 1 cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; I'm process 0 of 4 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 121 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev2">&gt;&gt; -bind-to-socket -bysocket rank_size
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27380,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27380,1],1] to socket 1 cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27380,1],2] to socket 0 cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18656] [[27380,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27380,1],3] to socket 1 cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; I'm process 0 of 4 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 117 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev2">&gt;&gt;  -bind-to-core -bycore rank_size
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27307,1],2] to cpus 0004
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An attempt to set processor affinity has failed - please check to
</span><br>
<span class="quotelev2">&gt;&gt; ensure that your system supports such functionality. If so, then
</span><br>
<span class="quotelev2">&gt;&gt; this is probably something that should be reported to the OMPI
</span><br>
<span class="quotelev2">&gt;&gt;  developers.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27307,1],0] to cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18623] [[27307,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27307,1],1] to cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec was unable to start the specified application
</span><br>
<span class="quotelev2">&gt;&gt;  as it encountered an error
</span><br>
<span class="quotelev2">&gt;&gt; on node tyr.informatik.hs-fulda.de. More information may be
</span><br>
<span class="quotelev2">&gt;&gt;  available above.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 118 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev2">&gt;&gt;  -bind-to-core -bysocket rank_size
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An invalid physical processor ID was returned when attempting to
</span><br>
<span class="quotelev2">&gt;&gt;  bind
</span><br>
<span class="quotelev2">&gt;&gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This usually means that you requested binding to more processors
</span><br>
<span class="quotelev2">&gt;&gt;  than
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors,
</span><br>
<span class="quotelev2">&gt;&gt;  where N &gt;
</span><br>
<span class="quotelev2">&gt;&gt; M).  Double check that you have enough unique processors for
</span><br>
<span class="quotelev2">&gt;&gt;  all the
</span><br>
<span class="quotelev2">&gt;&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18631] [[27347,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27347,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:18631] [[27347,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[27347,1],1] to socket 1 cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev2">&gt;&gt;  encountered an error
</span><br>
<span class="quotelev2">&gt;&gt; on node tyr.informatik.hs-fulda.de. More information may be
</span><br>
<span class="quotelev2">&gt;&gt;  available above.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev2">&gt;&gt; tyr fd1026 119
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;linpc3&quot; and &quot;linpc4&quot; are two processor dual core machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; linpc4 fd1026 102 mpiexec -report-bindings -host linpc3,linpc4 \
</span><br>
<span class="quotelev2">&gt;&gt; -np 4 -bind-to-core -bycore rank_size
</span><br>
<span class="quotelev2">&gt;&gt; [linpc4:16842] [[40914,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[40914,1],1] to cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [linpc4:16842] [[40914,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[40914,1],3] to cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; [linpc3:31384] [[40914,0],1] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[40914,1],0] to cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [linpc3:31384] [[40914,0],1] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[40914,1],2] to cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; I'm process 1 of 4 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; linpc4 fd1026 102 mpiexec -report-bindings -host linpc3,linpc4 \
</span><br>
<span class="quotelev2">&gt;&gt;  -np 4 -bind-to-core -bysocket rank_size
</span><br>
<span class="quotelev2">&gt;&gt; [linpc4:16846] [[40918,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[40918,1],1] to socket 0 cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [linpc4:16846] [[40918,0],0] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[40918,1],3] to socket 0 cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; [linpc3:31435] [[40918,0],1] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[40918,1],0] to socket 0 cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [linpc3:31435] [[40918,0],1] odls:default:
</span><br>
<span class="quotelev2">&gt;&gt;  fork binding child [[40918,1],2] to socket 0 cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt; I'm process 1 of 4 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; linpc4 fd1026 104 mpiexec -report-bindings -host linpc3,linpc4 \
</span><br>
<span class="quotelev2">&gt;&gt;  -np 4 -bind-to-socket -bycore rank_size
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unable to bind to socket 0 on node linpc3.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unable to bind to socket 0 on node linpc4.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev2">&gt;&gt;  encountered an error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error name: Fatal
</span><br>
<span class="quotelev2">&gt;&gt; Node: linpc4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when attempting to start process rank 1.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev2">&gt;&gt; linpc4 fd1026 105
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; linpc4 fd1026 105 mpiexec -report-bindings -host linpc3,linpc4 \
</span><br>
<span class="quotelev2">&gt;&gt;  -np 4 -bind-to-socket -bysocket rank_size
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unable to bind to socket 0 on node linpc4.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unable to bind to socket 0 on node linpc3.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev2">&gt;&gt;  encountered an error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error name: Fatal
</span><br>
<span class="quotelev2">&gt;&gt; Node: linpc4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when attempting to start process rank 1.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's interesting that commands that work on Solaris fail on Linux
</span><br>
<span class="quotelev2">&gt;&gt; and vice versa.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I couldn't really say for certain - I don't see anything obviously
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrong with your syntax, and the code appears to be working or else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it would fail on the other nodes as well. The fact that it fails
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; solely on that machine seems suspect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Set aside the rankfile for the moment and try to just bind to cores
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on that machine, something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec --report-bindings -bind-to-core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  -host rs0.informatik.hs-fulda.de -n 2 rank_size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If that doesn't work, then the problem isn't with rankfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It doesn't work but I found out something else as you can see below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get a segmentation fault for some rankfiles.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 110 mpiexec --report-bindings -bind-to-core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -host rs0.informatik.hs-fulda.de -n 2 rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An attempt to set processor affinity has failed - please check to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ensure that your system supports such functionality. If so, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is probably something that should be reported to the OMPI developers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:14695] [[30561,0],1] odls:default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  fork binding child [[30561,1],0] to cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  encountered an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error name: Resource temporarily unavailable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 total processes failed to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 111
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps I have a hint for the error on Solaris Sparc. I use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following rankfile to keep everything simple.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=linpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=linpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #rank 3=linpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 4=linpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 5=linpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 6=sunpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 7=sunpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 8=sunpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 9=sunpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 10=sunpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I execute &quot;mpiexec -report-bindings -rf my_rankfile rank_size&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on a Linux-x86_64 or Solaris-10-x86_64 machine everything works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 small_prog 104 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08018] [[49482,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [[49482,1],5] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc3:22030] [[49482,0],4] odls:default:fork binding child
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [[49482,1],4] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc0:12887] [[49482,0],2] odls:default:fork binding child
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [[49482,1],1] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc1:08323] [[49482,0],3] odls:default:fork binding child
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [[49482,1],2] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1:17786] [[49482,0],6] odls:default:fork binding child
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [[49482,1],7] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc3.informatik.hs-fulda.de:08482] [[49482,0],8] odls:default:fork
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  binding child [[49482,1],9] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc0.informatik.hs-fulda.de:11568] [[49482,0],5] odls:default:fork
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  binding child [[49482,1],6] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:21484] [[49482,0],1] odls:default:fork
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  binding child [[49482,1],0] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc2.informatik.hs-fulda.de:28638] [[49482,0],7] odls:default:fork
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  binding child [[49482,1],8] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get a segmentation fault when I run it on my local machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Solaris Sparc).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 141 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:21421] [[29113,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data unpack would read past end of buffer in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  at line 927
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:21421] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:21421] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:21421] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:21421] Failing at address: 5ba
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x15d3ec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xcad04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xbf3b4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xbf59c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0x58bd0 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:free+0x24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_odls_base_default_construct_child_list+0x1234
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mca_odls_default.so:0x90b8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x5e8d4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_daemon_cmd_processor+0x328
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:0x12e324
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  opal_event_base_loop+0x228
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  opal_progress+0xec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_plm_base_report_launched+0x1c4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/libopen-rte.so.4.0.0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_plm_base_launch_apps+0x318
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/lib/openmpi/mca_plm_rsh.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_plm_rsh_launch+0xac4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:orterun+0x16a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.6_32_cc/bin/orterun:_start+0xd8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:21421] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The funny thing is that I get a segmentation fault on the Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine as well if I change my rankfile in the following way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=linpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #rank 2=linpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #rank 3=linpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #rank 4=linpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 5=linpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 6=sunpc0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #rank 7=sunpc1.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #rank 8=sunpc2.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #rank 9=sunpc3.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 10=sunpc4.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 small_prog 107 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [[65226,0],0] ORTE_ERROR_LOG: Data unpack would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  read past end of buffer in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  at line 927
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] Failing at address: 0x5f32fffc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 0] [0xffffe410]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 1] /usr/local/openmpi-1.6_32_cc/lib/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mca_odls_default.so(+0x4023) [0xf73ec023]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 2] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libopen-rte.so.4(+0x42b91) [0xf7667b91]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 3] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libopen-rte.so.4(orte_daemon_cmd_processor+0x313) [0xf76655c3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 4] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libopen-rte.so.4(+0x8f366) [0xf76b4366]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 5] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libopen-rte.so.4(opal_event_base_loop+0x18c) [0xf76b46bc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 6] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libopen-rte.so.4(opal_event_loop+0x26) [0xf76b4526]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 7] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libopen-rte.so.4(opal_progress+0xba) [0xf769303a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 8] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libopen-rte.so.4(orte_plm_base_report_launched+0x13f) [0xf767d62f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [ 9] /usr/local/openmpi-1.6_32_cc/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  libopen-rte.so.4(orte_plm_base_launch_apps+0x1b7) [0xf767bf27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [10] /usr/local/openmpi-1.6_32_cc/lib/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mca_plm_rsh.so(orte_plm_rsh_launch+0xb2d) [0xf74228fd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [11] mpiexec(orterun+0x102f) [0x804e7bf]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [12] mpiexec(main+0x13) [0x804c273]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] [13] /lib/libc.so.6(__libc_start_main+0xf3) [0xf745e003]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:08402] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 small_prog 107
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully this information helps to fix the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 5, 2012, at 5:50 AM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm new to rankfiles so that I played a little bit with different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; options. I thought that the following entry would be similar to an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; entry in an appfile and that MPI could place the process with rank 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on any core of any processor.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately it's not allowed and I got an error. Can somebody add
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the missing help to the file?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tyr small_prog 126 mpiexec -rf my_rankfile -report-bindings rank_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   no-slot-list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from the file:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   help-rmaps_rank_file.txt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But I couldn't find that topic in the file.  Sorry!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As you can see below I could use a rankfile on my old local machine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Sun Ultra 45) but not on our &quot;new&quot; one (Sun Server M4000). Today I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; logged into the machine via ssh and tried the same command once more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as a local user without success. It's more or less the same error as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before when I tried to bind the process to a remote machine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rs0 small_prog 118 mpiexec -rf my_rankfile -report-bindings rank_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:13745] [[19734,0],0] odls:default:fork
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; binding child [[19734,1],0] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; affinity settings:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Specified slot list: 0:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Error: Cross-device link
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec was unable to start the specified application as it encountered an
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Error name: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rs0 small_prog 119
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The application is available.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rs0 small_prog 119 which rank_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/fd1026/SunOS/sparc/bin/rank_size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is it a problem in the Open MPI implementation or in my rankfile?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How can I request which sockets and cores per socket are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; available so that I can use correct values in my rankfile?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In lam-mpi I had a command &quot;lamnodes&quot; which I could use to get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; such information. Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are *all* the machines Sparc? Or just the 3rd one (rs0)?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Yes, both machines are Sparc. I tried first in a homogeneous
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; environment.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 106 psrinfo -v
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 0 as of: 09/04/2012 07:32:14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on-line since 08/31/2012 15:44:42.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 1600 MHz,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 1 as of: 09/04/2012 07:32:14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on-line since 08/31/2012 15:44:39.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 1600 MHz,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr fd1026 107
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My local machine (tyr) is a dual processor machine and the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; other one is equipped with two quad-core processors each
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; capable of running two hardware threads.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 3, 2012, at 12:43 PM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the man page for &quot;mpiexec&quot; shows the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       cat myrankfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       rank 0=aa slot=1:0-2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       rank 1=bb slot=0:0,1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       rank 2=cc slot=1-2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       mpirun -H aa,bb,cc,dd -rf myrankfile ./a.out So that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Rank 0 runs on node aa, bound to socket 1, cores 0-2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Rank 2 runs on node cc, bound to cores 1 and 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does it mean that the process with rank 0 should be bound to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; core 0, 1, or 2 of socket 1?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried to use a rankfile and have a problem. My rankfile contains
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the following lines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 1=tyr.informatik.hs-fulda.de slot=1:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #rank 2=rs0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Everything is fine if I use the file with just my local machine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (the first two lines).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 115 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[9849,1],0] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[9849,1],1] to slot_list 1:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm process 0 of 2 available processes running on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm process 1 of 2 available processes running on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 116
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can also change the socket number and the processes will be attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to the correct cores. Unfortunately it doesn't work if I add one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; other machine (third line).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 112 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; affinity settings:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Specified slot list: 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Error: Cross-device link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],0] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],1] to slot_list 1:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [rs0.informatik.hs-fulda.de:12047] [[10212,0],1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:default:fork binding child [[10212,1],2] to slot_list 0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; whose contact information is unknown in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../../openmpi-1.6/orte/mca/rml/oob/rml_oob_send.c at line 145
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] attempted to send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to [[10212,1],0]: tag 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A message is attempting to be sent to a process whose contact
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; information is unknown in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 2501
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Error name: Error 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; when attempting to start process rank 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 113
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The other machine has two 8 core processors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 121 ssh rs0 psrinfo -v
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 0 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on-line since 07/26/2012 15:03:14.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 1 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Status of virtual processor 15 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on-line since 07/26/2012 15:03:16.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr small_prog 122
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is it necessary to specify another option on the command line or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is my rankfile faulty? Thank you very much for any suggestions in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Fri, 07 Sep 2012 18:01:46 -0400
</span><br>
<span class="quotelev1">&gt; From: Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster
</span><br>
<span class="quotelev1">&gt;         of      servers
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;504A6ECA.4040508_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/03/2012 04:39 PM, Andrea Negri wrote:
</span><br>
<span class="quotelev2">&gt;&gt; max locked memory             (kbytes, -l) 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  max memory size                (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  open files                           (-n) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  pipe size                            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  stack size                           (kbytes, -s) 10240
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Andrea
</span><br>
<span class="quotelev1">&gt; This is besides the possibilities of
</span><br>
<span class="quotelev1">&gt; running out of physical memory,
</span><br>
<span class="quotelev1">&gt; or even defective memory chips, which Jeff, Ralph,
</span><br>
<span class="quotelev1">&gt; John, George have addressed, I still think that the
</span><br>
<span class="quotelev1">&gt; system limits above may play a role.
</span><br>
<span class="quotelev1">&gt; In a 8-year old cluster, hardware failures are not unexpected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) System limits
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For what it is worth, virtually none of the programs we run here,
</span><br>
<span class="quotelev1">&gt; mostly atmosphere/ocean/climate codes,
</span><br>
<span class="quotelev1">&gt; would run with these limits.
</span><br>
<span class="quotelev1">&gt; On our compute nodes we set
</span><br>
<span class="quotelev1">&gt; max locked memory and stack size to
</span><br>
<span class="quotelev1">&gt; unlimited, to avoid problems with symptoms very
</span><br>
<span class="quotelev1">&gt; similar to those you describe.
</span><br>
<span class="quotelev1">&gt; Typically there are lots of automatic arrays in subroutines,
</span><br>
<span class="quotelev1">&gt; etc, which require a large stack.
</span><br>
<span class="quotelev1">&gt; Your sys admin could add these lines to the bottom
</span><br>
<span class="quotelev1">&gt; of /etc/security/limits.conf [the last one sets the
</span><br>
<span class="quotelev1">&gt; max number of open files]:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *   -   memlock     -1
</span><br>
<span class="quotelev1">&gt; *   -   stack       -1
</span><br>
<span class="quotelev1">&gt; *   -   nofile      4096
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Defective network interface/cable/switch port
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet another possibility, following Ralph's suggestion,
</span><br>
<span class="quotelev1">&gt; is that you may have a failing network interface, or a bad
</span><br>
<span class="quotelev1">&gt; Ethernet cable or connector, on the node that goes south,
</span><br>
<span class="quotelev1">&gt; or on the switch port that serves that node.
</span><br>
<span class="quotelev1">&gt; [I am assuming your network is Ethernet, probably GigE.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, in a 8-year old cluster, hardware failures are not unexpected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had this sort of problems with old clusters, old nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Quarantine the bad node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it always the same node that fails, or does it vary?
</span><br>
<span class="quotelev1">&gt; [Please answer, it helps us understand what's going on.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it is always the same node, have you tried to quarantine it,
</span><br>
<span class="quotelev1">&gt; either temporarily removing it from your job submission system
</span><br>
<span class="quotelev1">&gt; or just turning it off, and run the job on the remaining
</span><br>
<span class="quotelev1">&gt; nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Fri, 07 Sep 2012 18:12:20 -0400
</span><br>
<span class="quotelev1">&gt; From: Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster
</span><br>
<span class="quotelev1">&gt;         of      servers
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;504A7144.1000108_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/07/2012 08:02 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 7, 2012, at 5:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also look for hardware errors.  Perhaps you have some bad RAM somewhere.  Is it always the same node that crashes?  And so on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another thought on hardware errors... I actually have seen bad RAM cause spontaneous reboots with no Linux warnings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any hardware diagnostics from your server
</span><br>
<span class="quotelev2">&gt;&gt; vendor that you can run?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't have a vendor provided diagnostic tool,
</span><br>
<span class="quotelev1">&gt; you or your sys admin could try Advanced Clustering &quot;breakin&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.advancedclustering.com/our-software/view-category.html">http://www.advancedclustering.com/our-software/view-category.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Download the ISO version, burn a CD, put in the node CD drive,
</span><br>
<span class="quotelev1">&gt; assuming it has one, reboot, chose breakin in the menu options.
</span><br>
<span class="quotelev1">&gt; If there is no CD drive, there is an alternative with network boot,
</span><br>
<span class="quotelev1">&gt; although more involved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope it helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A simple way to test your RAM (it's not completely comprehensive, but it does check for a surprisingly wide array of memory issues) is to do something like this (pseudocode):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; size_t i, size, increment;
</span><br>
<span class="quotelev2">&gt;&gt; increment = 1GB;
</span><br>
<span class="quotelev2">&gt;&gt; size = 1GB;
</span><br>
<span class="quotelev2">&gt;&gt; int *ptr;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; // Find the biggest amount of memory that you can malloc
</span><br>
<span class="quotelev2">&gt;&gt; while (increment&gt;= 1024) {
</span><br>
<span class="quotelev2">&gt;&gt;      ptr = malloc(size);
</span><br>
<span class="quotelev2">&gt;&gt;      if (NULL != ptr) {
</span><br>
<span class="quotelev2">&gt;&gt;           free(ptr);
</span><br>
<span class="quotelev2">&gt;&gt;           size += increment;
</span><br>
<span class="quotelev2">&gt;&gt;      } else {
</span><br>
<span class="quotelev2">&gt;&gt;           size -= increment;
</span><br>
<span class="quotelev2">&gt;&gt;           increment /= 2;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;I can malloc %lu bytes\n&quot;, size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; // Malloc that huge chunk of memory
</span><br>
<span class="quotelev2">&gt;&gt; ptr = malloc(size);
</span><br>
<span class="quotelev2">&gt;&gt; for (i = 0; i&lt;  size / sizeof(int); ++i, ++ptr) {
</span><br>
<span class="quotelev2">&gt;&gt;      *ptr = 37;
</span><br>
<span class="quotelev2">&gt;&gt;      if (*ptr != 37) {
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;Readback error!\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;All done\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depending on how much memory you have,
</span><br>
<span class="quotelev1">&gt; that might take a little while to run
</span><br>
<span class="quotelev1">&gt; (all the memory has to be paged in, etc.).
</span><br>
<span class="quotelev1">&gt; You might want to add a status output to show progress,
</span><br>
<span class="quotelev1">&gt; and/or write/read a page at a time for better efficiency, etc.
</span><br>
<span class="quotelev1">&gt; But you get the idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Sat, 8 Sep 2012 06:25:22 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI
</span><br>
<span class="quotelev1">&gt;         1.6.1)
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;1B815295-1D69-46DB-8DCB-B308C228BD2F_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am unable to replicate your problem, but admittedly I only have access to gfortran on Linux.  And I am definitely *not* a Fortran expert.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code seems to run fine for me -- can you send another test program that actually tests the results of the all reduce?  Fortran allocatable stuff always confuses me; I wonder if perhaps we're not getting the passed pointer properly.  Checking the results of the all reduce would be a good way to check this theory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 6, 2012, at 12:05 PM, Yonghui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear mpi users and developers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am having some trouble with MPI_Allreduce. I am using MinGW (gcc 4.6.2) with OpenMPI 1.6.1. The MPI_Allreduce in c version works fine, but the fortran version failed with error. Here is the simple fortran code to reproduce the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 program main
</span><br>
<span class="quotelev2">&gt;&gt;                                 implicit none
</span><br>
<span class="quotelev2">&gt;&gt;                                 include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;                                 character * (MPI_MAX_PROCESSOR_NAME) processor_name
</span><br>
<span class="quotelev2">&gt;&gt;                                 integer myid, numprocs, namelen, rc, ierr
</span><br>
<span class="quotelev2">&gt;&gt;                                 integer, allocatable :: mat1(:, :, :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 call MPI_INIT( ierr )
</span><br>
<span class="quotelev2">&gt;&gt;                                 call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;                                 call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;                                 allocate(mat1(-36:36, -36:36, -36:36))
</span><br>
<span class="quotelev2">&gt;&gt;                                 mat1(:,:,:) = 111
</span><br>
<span class="quotelev2">&gt;&gt;                                 print *, &quot;Going to call MPI_Allreduce.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                 call MPI_Allreduce(MPI_IN_PLACE, mat1(-36, -36, -36), 389017, MPI_INTEGER, MPI_BOR, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                                 print *, &quot;MPI_Allreduce done!!!&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                 call MPI_FINALIZE(rc)
</span><br>
<span class="quotelev2">&gt;&gt;                 endprogram
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The command that I used to compile:
</span><br>
<span class="quotelev2">&gt;&gt; gfortran Allreduce.f90 -IC:\OpenMPI-win32\include C:\OpenMPI-win32\lib\libmpi_f77.lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The MPI_Allreduce fail. [xxxxxxx:02112] [[17193,0],0]-[[17193,1],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108).
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure why this happens. But I think it is the windows build MPI problem. Since the simple code works on a Linux system with gfortran.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas? I appreciate any response!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yonghui
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Sat, 8 Sep 2012 07:46:16 -0500
</span><br>
<span class="quotelev1">&gt; From: Jed Brown &lt;jed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Setting RPATH for Open MPI libraries
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CAM9tzS=qFkOZW=C4=dFg65W+QcX1J=h4W2-DZxwbPNenOwjGkg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to configure Open MPI to use RPATH without needing to
</span><br>
<span class="quotelev1">&gt; manually specify --with-wrapper-ldflags=-Wl,-rpath,${prefix}/lib (and
</span><br>
<span class="quotelev1">&gt; similar for non-GNU-compatible compilers)?
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 2347, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20168.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="20125.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
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
