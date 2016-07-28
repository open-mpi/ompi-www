<?
$subject_val = "[OMPI devel] RE :  Implementation of MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 16:21:46 2011" -->
<!-- isoreceived="20110927202146" -->
<!-- sent="Tue, 27 Sep 2011 16:21:41 -0400" -->
<!-- isosent="20110927202141" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI devel] RE :  Implementation of MPI_Iprobe" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F267700730_at_EXCH-MBX-F.ulaval.ca" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E715FB1F-0E8F-4DB4-832E-3C1C0BCED219_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] RE :  Implementation of MPI_Iprobe<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 16:21:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9768.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9768.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9768.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello George,
<br>
<p><p>Thank you for reply.
<br>
<p>I have read the OB1 code.
<br>
<p><p>Let's suppose that the source is MPI_ANY_SOURCE.
<br>
<p>And let's suppose that we have this call stack:
<br>
<p><p>1. MPI_Iprobe
<br>
&nbsp;(in ompi/mpi/c/iprobe.c)
<br>
2. mca_pml_ob1_iprobe
<br>
&nbsp;(in ompi/mca/pml/ob1/pml_ob1_iprobe.c)
<br>
3. mca_pml_ob1_recv_req_start
<br>
&nbsp;(in ompi/mca/pml/ob1/pml_ob1_recvreq.c)
<br>
4. recv_req_match_wild
<br>
&nbsp;(in ompi/mca/pml/ob1/pml_ob1_recvreq.c)
<br>
<p>In recv_req_match_wild, peers with lower ranks will get matched before peers with higher ranks if MPI_ANY_SOURCE is provided.
<br>
<p>If all the MPI ranks (let's say we have 256 such MPI ranks) in MPI_COMM_WORLD send messages to rank 0 at a similar rate,
<br>
messages from rank 1 will always get probed before those of rank 255.
<br>
<p>Now, let's suppose that rank 0 has to sent a reply message to each incoming message and that ranks 1 to 255 wait for a reply from rank 0
<br>
before sending another message to the MPI rank 0.
<br>
<p>The case where a rank suffers from starvation (its messages never get probed by rank 0) will happen a lot.
<br>
<p><p>Did I miss something ?
<br>
<p><p>This is something I see with my software -- I see obvious starvation.
<br>
<p><p>In my software, each rank has a main loop like this:
<br>
<p>while(running){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;receiveMessages();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processMessages();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processData();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendMessages();
<br>
}
<br>
<p><p>According to my tests, MPI_Iprobe should utilise a round-robin reception to give a fair and equal chance to all MPI ranks to succeed.
<br>
<p><p>With MPI_Iprobe using MPI_ANY_SOURCE (rank 255 suffers from starvation):
<br>
<p><p><p>Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4412.93 s Speed= 74521 Sent= 200 (processMessages: 45, processData: 155) Received= 200 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.03 s Speed= 69358 Sent= 56 (processMessages: 28, processData: 28) Received= 56 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.13 s Speed= 75173 Sent= 50 (processMessages: 30, processData: 20) Received= 50 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.23 s Speed= 86652 Sent= 39 (processMessages: 36, processData: 3) Received= 39 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.33 s Speed= 86366 Sent= 49 (processMessages: 49, processData: 0) Received= 49 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.43 s Speed= 88004 Sent= 28 (processMessages: 28, processData: 0) Received= 28 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.53 s Speed= 87924 Sent= 19 (processMessages: 19, processData: 0) Received= 19 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.63 s Speed= 88320 Sent= 28 (processMessages: 28, processData: 0) Received= 28 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.73 s Speed= 88028 Sent= 28 (processMessages: 28, processData: 0) Received= 28 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.83 s Speed= 88265 Sent= 38 (processMessages: 38, processData: 0) Received= 38 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4413.93 s Speed= 87299 Sent= 44 (processMessages: 44, processData: 0) Received= 44 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.03 s Speed= 87512 Sent= 23 (processMessages: 23, processData: 0) Received= 23 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.13 s Speed= 87549 Sent= 6 (processMessages: 6, processData: 0) Received= 6 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.23 s Speed= 86853 Sent= 34 (processMessages: 34, processData: 0) Received= 34 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.33 s Speed= 87106 Sent= 41 (processMessages: 41, processData: 0) Received= 41 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.43 s Speed= 87695 Sent= 77 (processMessages: 77, processData: 0) Received= 77 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.53 s Speed= 88292 Sent= 18 (processMessages: 18, processData: 0) Received= 18 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.63 s Speed= 87971 Sent= 16 (processMessages: 16, processData: 0) Received= 16 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.73 s Speed= 88715 Sent= 11 (processMessages: 11, processData: 0) Received= 11 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.83 s Speed= 87352 Sent= 14 (processMessages: 14, processData: 0) Received= 14 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4414.93 s Speed= 88177 Sent= 7 (processMessages: 7, processData: 0) Received= 7 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.03 s Speed= 88815 Sent= 8 (processMessages: 8, processData: 0) Received= 8 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.13 s Speed= 88017 Sent= 20 (processMessages: 20, processData: 0) Received= 20 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.23 s Speed= 87364 Sent= 49 (processMessages: 49, processData: 0) Received= 49 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.33 s Speed= 88825 Sent= 39 (processMessages: 39, processData: 0) Received= 39 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.43 s Speed= 88079 Sent= 43 (processMessages: 43, processData: 0) Received= 43 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.53 s Speed= 87816 Sent= 43 (processMessages: 43, processData: 0) Received= 43 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.63 s Speed= 88133 Sent= 27 (processMessages: 27, processData: 0) Received= 27 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.73 s Speed= 88552 Sent= 30 (processMessages: 30, processData: 0) Received= 30 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.83 s Speed= 88722 Sent= 47 (processMessages: 47, processData: 0) Received= 47 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4415.93 s Speed= 87087 Sent= 26 (processMessages: 26, processData: 0) Received= 26 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.03 s Speed= 86980 Sent= 36 (processMessages: 36, processData: 0) Received= 36 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.13 s Speed= 86830 Sent= 35 (processMessages: 35, processData: 0) Received= 35 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.23 s Speed= 87083 Sent= 32 (processMessages: 32, processData: 0) Received= 32 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.33 s Speed= 86592 Sent= 114 (processMessages: 114, processData: 0) Received= 114 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.43 s Speed= 87649 Sent= 29 (processMessages: 29, processData: 0) Received= 29 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.53 s Speed= 87070 Sent= 39 (processMessages: 39, processData: 0) Received= 39 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.63 s Speed= 86745 Sent= 26 (processMessages: 26, processData: 0) Received= 26 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.73 s Speed= 86464 Sent= 52 (processMessages: 52, processData: 0) Received= 52 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.83 s Speed= 88616 Sent= 12 (processMessages: 12, processData: 0) Received= 12 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4416.93 s Speed= 88738 Sent= 22 (processMessages: 22, processData: 0) Received= 22 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.03 s Speed= 87598 Sent= 18 (processMessages: 18, processData: 0) Received= 18 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.13 s Speed= 87501 Sent= 16 (processMessages: 16, processData: 0) Received= 16 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.23 s Speed= 87055 Sent= 11 (processMessages: 11, processData: 0) Received= 11 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.33 s Speed= 87294 Sent= 31 (processMessages: 31, processData: 0) Received= 31 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.43 s Speed= 87511 Sent= 50 (processMessages: 50, processData: 0) Received= 50 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.53 s Speed= 88385 Sent= 15 (processMessages: 15, processData: 0) Received= 15 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.63 s Speed= 88515 Sent= 18 (processMessages: 18, processData: 0) Received= 18 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.73 s Speed= 88286 Sent= 34 (processMessages: 34, processData: 0) Received= 34 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.83 s Speed= 88401 Sent= 23 (processMessages: 23, processData: 0) Received= 23 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4417.93 s Speed= 88688 Sent= 50 (processMessages: 50, processData: 0) Received= 50 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4418.03 s Speed= 87795 Sent= 76 (processMessages: 76, processData: 0) Received= 76 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4418.13 s Speed= 87925 Sent= 34 (processMessages: 34, processData: 0) Received= 34 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4418.23 s Speed= 88999 Sent= 38 (processMessages: 38, processData: 0) Received= 38 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4418.33 s Speed= 88244 Sent= 32 (processMessages: 32, processData: 0) Received= 32 Balance= 0
<br>
<p><p><p>With MPI_Iprobe using a round-robin source (rank 255 is happy):
<br>
<p><p>Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4616.90 s Speed= 99471 Sent= 659 (processMessages: 284, processData: 375) Received= 659 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.00 s Speed= 99683 Sent= 623 (processMessages: 255, processData: 368) Received= 623 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.10 s Speed= 98947 Sent= 612 (processMessages: 249, processData: 363) Received= 612 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.20 s Speed= 93437 Sent= 692 (processMessages: 337, processData: 355) Received= 692 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.30 s Speed= 99303 Sent= 651 (processMessages: 285, processData: 366) Received= 651 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.40 s Speed= 98942 Sent= 672 (processMessages: 314, processData: 358) Received= 673 Balance= -1
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.50 s Speed= 98793 Sent= 666 (processMessages: 300, processData: 366) Received= 665 Balance= 1
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.60 s Speed= 99722 Sent= 636 (processMessages: 268, processData: 368) Received= 636 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.70 s Speed= 99423 Sent= 653 (processMessages: 299, processData: 354) Received= 653 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.80 s Speed= 99188 Sent= 662 (processMessages: 285, processData: 377) Received= 662 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4617.90 s Speed= 99044 Sent= 721 (processMessages: 362, processData: 359) Received= 721 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.00 s Speed= 99886 Sent= 661 (processMessages: 308, processData: 353) Received= 661 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.10 s Speed= 99167 Sent= 553 (processMessages: 255, processData: 298) Received= 553 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.20 s Speed= 87555 Sent= 579 (processMessages: 322, processData: 257) Received= 579 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.30 s Speed= 89102 Sent= 705 (processMessages: 380, processData: 325) Received= 705 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.40 s Speed= 97809 Sent= 594 (processMessages: 237, processData: 357) Received= 594 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.50 s Speed= 96536 Sent= 622 (processMessages: 285, processData: 337) Received= 622 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.60 s Speed= 97324 Sent= 556 (processMessages: 280, processData: 276) Received= 556 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.70 s Speed= 96559 Sent= 559 (processMessages: 230, processData: 329) Received= 559 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.80 s Speed= 99291 Sent= 570 (processMessages: 300, processData: 270) Received= 570 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4618.90 s Speed= 94826 Sent= 599 (processMessages: 253, processData: 346) Received= 599 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.00 s Speed= 100354 Sent= 524 (processMessages: 312, processData: 212) Received= 524 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.10 s Speed= 95876 Sent= 566 (processMessages: 270, processData: 296) Received= 566 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.20 s Speed= 97496 Sent= 579 (processMessages: 257, processData: 322) Received= 579 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.30 s Speed= 90936 Sent= 553 (processMessages: 245, processData: 308) Received= 553 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.40 s Speed= 97745 Sent= 408 (processMessages: 250, processData: 158) Received= 408 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.50 s Speed= 95501 Sent= 546 (processMessages: 266, processData: 280) Received= 546 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.60 s Speed= 98634 Sent= 465 (processMessages: 229, processData: 236) Received= 465 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.70 s Speed= 102735 Sent= 424 (processMessages: 240, processData: 184) Received= 424 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.80 s Speed= 95615 Sent= 259 (processMessages: 239, processData: 20) Received= 259 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4619.90 s Speed= 98515 Sent= 503 (processMessages: 239, processData: 264) Received= 503 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.00 s Speed= 96227 Sent= 505 (processMessages: 198, processData: 307) Received= 505 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.10 s Speed= 94817 Sent= 585 (processMessages: 255, processData: 330) Received= 585 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.20 s Speed= 96908 Sent= 548 (processMessages: 189, processData: 359) Received= 548 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.30 s Speed= 97449 Sent= 346 (processMessages: 167, processData: 179) Received= 346 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.40 s Speed= 105748 Sent= 204 (processMessages: 154, processData: 50) Received= 204 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.50 s Speed= 103088 Sent= 297 (processMessages: 175, processData: 122) Received= 297 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.60 s Speed= 97355 Sent= 517 (processMessages: 196, processData: 321) Received= 517 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.70 s Speed= 98331 Sent= 430 (processMessages: 157, processData: 273) Received= 430 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.80 s Speed= 96450 Sent= 471 (processMessages: 169, processData: 302) Received= 471 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4620.90 s Speed= 96079 Sent= 454 (processMessages: 113, processData: 341) Received= 454 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.00 s Speed= 96488 Sent= 378 (processMessages: 175, processData: 203) Received= 378 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.10 s Speed= 95787 Sent= 489 (processMessages: 125, processData: 364) Received= 489 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.20 s Speed= 95475 Sent= 352 (processMessages: 191, processData: 161) Received= 352 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.30 s Speed= 96684 Sent= 300 (processMessages: 160, processData: 140) Received= 300 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.40 s Speed= 93215 Sent= 418 (processMessages: 147, processData: 271) Received= 418 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.50 s Speed= 96528 Sent= 377 (processMessages: 136, processData: 241) Received= 377 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.60 s Speed= 96139 Sent= 491 (processMessages: 180, processData: 311) Received= 491 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.70 s Speed= 94720 Sent= 516 (processMessages: 214, processData: 302) Received= 516 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.80 s Speed= 95837 Sent= 504 (processMessages: 179, processData: 325) Received= 504 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4621.90 s Speed= 97159 Sent= 244 (processMessages: 133, processData: 111) Received= 244 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4622.00 s Speed= 96955 Sent= 495 (processMessages: 135, processData: 360) Received= 495 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4622.10 s Speed= 96410 Sent= 470 (processMessages: 181, processData: 289) Received= 470 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4622.20 s Speed= 96543 Sent= 539 (processMessages: 181, processData: 358) Received= 539 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4622.30 s Speed= 97717 Sent= 335 (processMessages: 126, processData: 209) Received= 335 Balance= 0
<br>
<p><p><p>I also get starvation with persistent requests.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&#233;bastien
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://github.com/sebhtml/ray">http://github.com/sebhtml/ray</a>
<br>
<p><span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; De : devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] de la part de George Bosilca [bosilca_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Date d'envoi : 27 septembre 2011 15:34
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] Implementation of MPI_Iprobe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sebastien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your analysis is correct in case the checkpoint/restart approach maintained by ORNL is enabled. This is not the code path of the &quot;normal&quot; MPI processes, where the PML OB1 is used. In this generic case the function mca_pml_ob1_iprobe, defined in the file ompi/mca/pml/ob1/pml_ob1_iprobe.c is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 27, 2011, at 14:36 , S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I understand, When MPI_Iprobe is called, the code that is called is the function pointed by the attribute
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_base_module_iprobe_fn_t       pml_iprobe;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in ompi/mca/pml/pml.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the file ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c (Open-MPI 1.4.3),
</span><br>
<span class="quotelev2">&gt;&gt; ompi_crcp_bkmrk_pml_iprobe calls drain_message_find_any.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In drain_message_find_any (in ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c), there is a loop over all MPI ranks
</span><br>
<span class="quotelev2">&gt;&gt; regardless of the peer parameter.
</span><br>
<span class="quotelev2">&gt;&gt; For instance, with 256 peers, probing for peer 255 requires 256 iterations while probing for peer 0 requires 1 iteration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I understand it, the linked list ompi_crcp_bkmrk_pml_peer_refs is populated with nprocs entries where nprocs is presumably the number of MPI ranks in MPI_COMM_WORLD.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If my understanding is right, here are some suggestions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. ompi_crcp_bkmrk_pml_peer_refs should be an array so that when peer is not MPI_ANY_SOURCE, MPI_Iprobe can returns in constant time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. There should be some sort of round-robin mechanism for the case where the peer is MPI_ANY_SOURCE, otherwise lower ranks will get more probed and higher ranks will
</span><br>
<span class="quotelev2">&gt;&gt; suffer from starvation. This could be done by having a current position in the peer list (or array, see point 1). Instead of starting to loop on the first, the loop would start at current position and
</span><br>
<span class="quotelev2">&gt;&gt; a maximum of nprocs iterations would take place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A code review is on my blog: <a href="http://dskernel.blogspot.com/2011/09/code-review-what-happens-in-open-mpis.html">http://dskernel.blogspot.com/2011/09/code-review-what-happens-in-open-mpis.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                     S&#233;bastien
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9768.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9768.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9768.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
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
