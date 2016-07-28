<?
$subject_val = "[OMPI users] exploitation of vampirTrace generated otf files.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 19 08:32:22 2011" -->
<!-- isoreceived="20111219133222" -->
<!-- sent="Mon, 19 Dec 2011 14:32:14 +0100" -->
<!-- isosent="20111219133214" -->
<!-- name="Mathieu westphal" -->
<!-- email="mathieu.westphal_at_[hidden]" -->
<!-- subject="[OMPI users] exploitation of vampirTrace generated otf files." -->
<!-- id="4EEF3CDE.6090404_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EEF2E37.3020606_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI users] exploitation of vampirTrace generated otf files.<br>
<strong>From:</strong> Mathieu westphal (<em>mathieu.westphal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-19 08:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18008.php">Mathieu westphal: "Re: [OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>Previous message:</strong> <a href="18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="18005.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18008.php">Mathieu westphal: "Re: [OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>Reply:</strong> <a href="18008.php">Mathieu westphal: "Re: [OMPI users] exploitation of vampirTrace generated otf files."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I'm generating otf file by compiling my programm with mpicc-vt.
<br>
<p>It works very well and i can visualize the trace with the free Vampir.
<br>
<p>But i need to analyze the results with some mathematical tools.
<br>
<p>with vampir , i cannot extract any usefull data.
<br>
<p>So i try to use otfdump to extract the data. It works well to, i get 
<br>
lots of output like this :
<br>
<p>(#12251)     6227944291 Leave: function 0, process 1, source 0
<br>
(#12252)     6228010545 Enter: function 136, process 1, source 0
<br>
(#12253)     6228010545 SendMessage: sender 1, receiver 3, group 
<br>
1000000000, type 0, length 2880, source 0
<br>
(#12254)     6228012208 Leave: function 0, process 1, source 0
<br>
(#12255)     6228078341 Enter: function 126, process 1, source 0
<br>
(#12256)     6228727039 ReceiveMessage: receiver 1, sender 2, group 
<br>
1000000000, type 0, length 4, source 0
<br>
(#12257)     6228727039 Leave: function 0, process 1, source 0
<br>
(#12258)     6228727787 Enter: function 136, process 1, source 0
<br>
(#12259)     6228727787 SendMessage: sender 1, receiver 3, group 
<br>
1000000000, type 0, length 2880, source 0
<br>
(#12260)     6228729929 Leave: function 0, process 1, source 0
<br>
(#12261)     6228794962 Enter: function 136, process 1, source 0
<br>
(#12262)     6228794962 SendMessage: sender 1, receiver 3, group 
<br>
1000000000, type 0, length 2880, source 0
<br>
(#12263)     6228796965 Leave: function 0, process 1, source 0
<br>
(#12264)     6228862900 Enter: function 136, process 1, source 0
<br>
(#12265)     6228862900 SendMessage: sender 1, receiver 3, group 
<br>
1000000000, type 0, length 2880, source 0
<br>
(#12266)     6228864609 Leave: function 0, process 1, source 0
<br>
(#12267)     6228931011 Enter: function 136, process 1, source 0
<br>
(#12268)     6228931011 SendMessage: sender 1, receiver 3, group 
<br>
1000000000, type 0, length 2880, source 0
<br>
(#12269)     6228932640 Leave: function 0, process 1, source 0
<br>
(#12270)     6228999027 Enter: function 136, process 1, source 0
<br>
(#12271)     6228999027 SendMessage: sender 1, receiver 3, group 
<br>
1000000000, type 0, length 2880, source 0
<br>
<p><p>What really interest me is in these lines :
<br>
<p>(#12255)     6228078341 Enter: function 126, process 1, source 0
<br>
(#12256)     6228727039 ReceiveMessage: receiver 1, sender 2, group 
<br>
1000000000, type 0, length 4, source 0
<br>
(#12257)     6228727039 Leave: function 0, process 1, source 0
<br>
<p>and it's the time delta between the call to mpiRecv ( ReceiveMessage) 
<br>
and the leave of mpiRecv, so in this case :
<br>
6228727039 - 6228078341 = 648698
<br>
<p>But, what the unit of this value? why it dont correspond to anything in 
<br>
Vampir?
<br>
<p>After some test i empirically admit that
<br>
<p>otfdumptime / 2267,999980709 = vampirTime (in &#181;s)
<br>
<p>I can work from that, but if anyone has any clue about that....
<br>
<p>My guess is about some weird processor ticking count, but how vampir can 
<br>
manage the conversion ?
<br>
<p>Thanks for help
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18008.php">Mathieu westphal: "Re: [OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>Previous message:</strong> <a href="18006.php">Yevgeny Kliteynik: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="18005.php">TERRY DONTJE: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18008.php">Mathieu westphal: "Re: [OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>Reply:</strong> <a href="18008.php">Mathieu westphal: "Re: [OMPI users] exploitation of vampirTrace generated otf files."</a>
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
