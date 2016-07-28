<?
$subject_val = "[OMPI devel] Insufficient lockable memory leads to osu_bibw hang using OpenIB BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 19:48:32 2008" -->
<!-- isoreceived="20080715234832" -->
<!-- sent="Tue, 15 Jul 2008 16:48:26 -0700" -->
<!-- isosent="20080715234826" -->
<!-- name="Mark Debbage" -->
<!-- email="mark.debbage_at_[hidden]" -->
<!-- subject="[OMPI devel] Insufficient lockable memory leads to osu_bibw hang using OpenIB BTL" -->
<!-- id="6DB5B58A8E5AB846A7B3B3BFF1B4315A01EA85C9_at_AVEXCH1.qlogic.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Insufficient lockable memory leads to osu_bibw hang using OpenIB BTL<br>
<strong>From:</strong> Mark Debbage (<em>mark.debbage_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 19:48:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4365.php">Jeff Squyres: "[OMPI devel] MCA param aliases/etc."</a>
<li><strong>Previous message:</strong> <a href="4363.php">Jeff Squyres: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The osu_bibw micro-benchmark from Ohio State's OMB 3.1 suite hangs when
<br>
run over OpenMPI 1.2.5 from OFED 1.3 using the OpenIB BTL if there is
<br>
insufficient lockable memory. 128MB of lockable memory gives a hang
<br>
when the test gets to 4MB messages, while 512MB is sufficient for it
<br>
to pass. I observed this with InfiniPath and Mellanox adapter cards,
<br>
and see the same behavior with 1.2.6 too. I know the general advice 
<br>
is to use an unlimited or very large setting (per the FAQ), but there
<br>
are reasons for clusters to set finite user limits.
<br>
<p>For each message size in the loop, osu_bibw posts 64 non-blocking
<br>
sends followed by 64 non-blocking receives on both ranks followed 
<br>
by a wait for them all to complete. 64 is the default value for
<br>
the window size (number of concurrent messages). For 4MB messages
<br>
this is 256MB of memory to be sent which is more than exhausting
<br>
the 128MB of lockable memory on these systems. The OpenIB BTL
<br>
does ib_reg_mr for as many of the sends as it can and the rest
<br>
wait on a pending list. Then the ib_reg_mr for all the 
<br>
posted receives all fail as well due to the ulimit check,
<br>
and all of them have to wait on a pending list too. This means
<br>
that neither rank actually gets to do an ib_post_recv, neither
<br>
side can make progress and the benchmark hangs without completing
<br>
a single 4MB message! This contrasts with the uni-directional 
<br>
osu_bw where one side does sends and the other does receives 
<br>
and progress can be made.
<br>
<p>This is admittedly a hard problem to solve in the general case.
<br>
It is unfortunate that this leads to a hang, rather than a
<br>
message advising the user to check ulimits. Maybe there should
<br>
be a warning the first time that the ulimit is exceeded to
<br>
alert the user to the problem. One solution would be to divide
<br>
the ulimit up into separate limits for sending and receiving,
<br>
so that excessive sending does not block all receiving. This
<br>
would require OpenMPI to keep track of the ulimit usage
<br>
separately for send and receive.
<br>
<p>In this particular synthetic benchmark there turns out to be
<br>
a straightforward workaround. The benchmark actually sends
<br>
from the same buffer 64 times over, and receives into another
<br>
buffer 64 times over (all posted concurrently). Thus there are 
<br>
really only two 4MB buffers at play here, though the kernel IB 
<br>
code charges the user separately for all 64 registrations of 
<br>
each even though the user already has those pages locked. In fact, 
<br>
the linux implementation of mlock (over)charges in the same way 
<br>
so I guess that choice is intentional and that the additional
<br>
complexity in spotting the duplicated locked pages wasn't 
<br>
worthwhile.
<br>
<p>This leads to the workaround of using --mca mpi_leave_pinned 1.
<br>
This turns on the code in the OpenIB BTL that caches the descriptors
<br>
so that there is only 1 ib_reg_mr for the send buffer and 1 ib_reg_mr
<br>
for the receive buffer, and all the others hit the descriptor
<br>
cache. This saves the day and the benchmark runs without problem.
<br>
<p>If this was the default option then this might save much consternation
<br>
for the user. For this workaround, note that there isn't any need 
<br>
for the descriptors to be left pinned after the send/recv complete,
<br>
all that is needed is the caching while they are posted. So one could
<br>
default to having the descriptor caching mechanism enabled even when 
<br>
mpi_leave_pinned is off. Also note that this is still a workaround 
<br>
that happens to be sufficient for the osu_bibw case but isn't a 
<br>
general panacea. osu_bibw and osu_bw are &quot;broken&quot; anyway in that 
<br>
it is illegal to post multiple concurrent receives in the same 
<br>
receive buffer. I believe this is done to minimize CPU cache 
<br>
effects and maximize measured bandwidth. Anyway, having multiple
<br>
posted sends from the same send buffer is reasonable (eg. a broadcast)
<br>
so caching those descriptors and reducing lockable memory usage 
<br>
seems like a good idea to me. Although osu_bibw is very synthetic
<br>
it is conceivable that other real codes with large messages could
<br>
see the hangs (eg. just MPI_Sendrecv a message larger than ulimit -l?).
<br>
<p>Cheers,
<br>
<p>Mark.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4364/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4365.php">Jeff Squyres: "[OMPI devel] MCA param aliases/etc."</a>
<li><strong>Previous message:</strong> <a href="4363.php">Jeff Squyres: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
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
