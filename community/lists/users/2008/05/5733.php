<?
$subject_val = "[OMPI users] Infinite loop when tcp free list max reached";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 26 17:18:01 2008" -->
<!-- isoreceived="20080526211801" -->
<!-- sent="Mon, 26 May 2008 15:17:51 -0600" -->
<!-- isosent="20080526211751" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="[OMPI users] Infinite loop when tcp free list max reached" -->
<!-- id="d105ee120805261417i1170085g97e6f19dbe91ac37_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Infinite loop when tcp free list max reached<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-26 17:17:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5734.php">Gabriele Fatigati: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5732.php">Cally K: "Re: [OMPI users] include port 80 in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5803.php">Jeff Squyres: "Re: [OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5803.php">Jeff Squyres: "Re: [OMPI users] Infinite loop when tcp free list max reached"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the TCP btl, when free list items are exhausted, OMPI 1.2.6 falls
<br>
into an infinite loop:
<br>
<p>#3981 0x0000002a98b4e23f in opal_condition_wait (c=0x2a98c541d0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m=0x2a98c54180) at ../../../../opal/threads/condition.h:81
<br>
#3982 0x0000002a98b4e0e9 in __ompi_free_list_wait (fl=0x2a98c540d0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;item=0x7fa82af630) at ../../../../ompi/class/ompi_free_list.h:187
<br>
#3983 0x0000002a98b4dbd4 in mca_btl_tcp_endpoint_recv_handler (sd=18, flags=2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;user=0xc20240) at btl_tcp_endpoint.c:611
<br>
#3984 0x0000002a95bf78de in opal_event_process_active (base=0xb81390)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at event.c:464
<br>
#3985 0x0000002a95bf7c0a in opal_event_base_loop (base=0xb81390, flags=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at event.c:603
<br>
#3986 0x0000002a95bf79c7 in opal_event_loop (flags=2) at event.c:517
<br>
#3987 0x0000002a95bf2227 in opal_progress () at runtime/opal_progress.c:259
<br>
#3988 0x0000002a98b4e23f in opal_condition_wait (c=0x2a98c541d0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m=0x2a98c54180) at ../../../../opal/threads/condition.h:81
<br>
#3989 0x0000002a98b4e0e9 in __ompi_free_list_wait (fl=0x2a98c540d0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;item=0x7fa82af7f0) at ../../../../ompi/class/ompi_free_list.h:187
<br>
#3990 0x0000002a98b4dbd4 in mca_btl_tcp_endpoint_recv_handler (sd=22, flags=2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;user=0xc2dcf0) at btl_tcp_endpoint.c:611
<br>
#3991 0x0000002a95bf78de in opal_event_process_active (base=0xb81390)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at event.c:464
<br>
#3992 0x0000002a95bf7c0a in opal_event_base_loop (base=0xb81390, flags=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at event.c:603
<br>
#3993 0x0000002a95bf79c7 in opal_event_loop (flags=2) at event.c:517
<br>
#3994 0x0000002a95bf2227 in opal_progress () at runtime/opal_progress.c:259
<br>
#3995 0x0000002a98b4e23f in opal_condition_wait (c=0x2a98c541d0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m=0x2a98c54180) at ../../../../opal/threads/condition.h:81
<br>
<p>The call used to get a free list item is OMPI_FREE_LIST_WAIT(), which
<br>
is supposed to block until an item is available.  However, it calls
<br>
opal_condition_wait(), which in turn calls opal_process(), which then
<br>
waits for a free list item.....  It seems strange to me that
<br>
opal_condition_wait() calls opal_progress(), but I'm not that familiar
<br>
with the code.
<br>
<p>Is it possible that this has been fixed in 1.3?
<br>
<p>I haven't tried 1.3 yet because I will have to file a truckload of
<br>
bugs against 1.3 first.
<br>
<p>Should I be posting this stuff to the devel list?
<br>
<p>Thanks,
<br>
mch
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5734.php">Gabriele Fatigati: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5732.php">Cally K: "Re: [OMPI users] include port 80 in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5803.php">Jeff Squyres: "Re: [OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5803.php">Jeff Squyres: "Re: [OMPI users] Infinite loop when tcp free list max reached"</a>
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
