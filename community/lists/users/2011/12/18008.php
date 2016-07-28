<?
$subject_val = "Re: [OMPI users] exploitation of vampirTrace generated otf files.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 19 09:09:05 2011" -->
<!-- isoreceived="20111219140905" -->
<!-- sent="Mon, 19 Dec 2011 15:08:57 +0100" -->
<!-- isosent="20111219140857" -->
<!-- name="Mathieu westphal" -->
<!-- email="mathieu.westphal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exploitation of vampirTrace generated otf files." -->
<!-- id="4EEF4579.40501_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EEF3CDE.6090404_at_obs.ujf-grenoble.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] exploitation of vampirTrace generated otf files.<br>
<strong>From:</strong> Mathieu westphal (<em>mathieu.westphal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-19 09:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18009.php">Joao Amaral: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Previous message:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>In reply to:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I think it's solved.
<br>
<p>It's indeed the number of tick, and i found the information with the 
<br>
otfinfo command, wich give me the line :
<br>
time resolution | 2.27 Ghz
<br>
<p>This value allow us to convert these tick values to seconds values.
<br>
<p>THanks all.
<br>
Le 19/12/2011 14:32, Mathieu westphal a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm generating otf file by compiling my programm with mpicc-vt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works very well and i can visualize the trace with the free Vampir.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But i need to analyze the results with some mathematical tools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with vampir , i cannot extract any usefull data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So i try to use otfdump to extract the data. It works well to, i get 
</span><br>
<span class="quotelev1">&gt; lots of output like this :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (#12251)     6227944291 Leave: function 0, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12252)     6228010545 Enter: function 136, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12253)     6228010545 SendMessage: sender 1, receiver 3, group 
</span><br>
<span class="quotelev1">&gt; 1000000000, type 0, length 2880, source 0
</span><br>
<span class="quotelev1">&gt; (#12254)     6228012208 Leave: function 0, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12255)     6228078341 Enter: function 126, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12256)     6228727039 ReceiveMessage: receiver 1, sender 2, group 
</span><br>
<span class="quotelev1">&gt; 1000000000, type 0, length 4, source 0
</span><br>
<span class="quotelev1">&gt; (#12257)     6228727039 Leave: function 0, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12258)     6228727787 Enter: function 136, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12259)     6228727787 SendMessage: sender 1, receiver 3, group 
</span><br>
<span class="quotelev1">&gt; 1000000000, type 0, length 2880, source 0
</span><br>
<span class="quotelev1">&gt; (#12260)     6228729929 Leave: function 0, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12261)     6228794962 Enter: function 136, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12262)     6228794962 SendMessage: sender 1, receiver 3, group 
</span><br>
<span class="quotelev1">&gt; 1000000000, type 0, length 2880, source 0
</span><br>
<span class="quotelev1">&gt; (#12263)     6228796965 Leave: function 0, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12264)     6228862900 Enter: function 136, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12265)     6228862900 SendMessage: sender 1, receiver 3, group 
</span><br>
<span class="quotelev1">&gt; 1000000000, type 0, length 2880, source 0
</span><br>
<span class="quotelev1">&gt; (#12266)     6228864609 Leave: function 0, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12267)     6228931011 Enter: function 136, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12268)     6228931011 SendMessage: sender 1, receiver 3, group 
</span><br>
<span class="quotelev1">&gt; 1000000000, type 0, length 2880, source 0
</span><br>
<span class="quotelev1">&gt; (#12269)     6228932640 Leave: function 0, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12270)     6228999027 Enter: function 136, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12271)     6228999027 SendMessage: sender 1, receiver 3, group 
</span><br>
<span class="quotelev1">&gt; 1000000000, type 0, length 2880, source 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What really interest me is in these lines :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (#12255)     6228078341 Enter: function 126, process 1, source 0
</span><br>
<span class="quotelev1">&gt; (#12256)     6228727039 ReceiveMessage: receiver 1, sender 2, group 
</span><br>
<span class="quotelev1">&gt; 1000000000, type 0, length 4, source 0
</span><br>
<span class="quotelev1">&gt; (#12257)     6228727039 Leave: function 0, process 1, source 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it's the time delta between the call to mpiRecv ( ReceiveMessage) 
</span><br>
<span class="quotelev1">&gt; and the leave of mpiRecv, so in this case :
</span><br>
<span class="quotelev1">&gt; 6228727039 - 6228078341 = 648698
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, what the unit of this value? why it dont correspond to anything 
</span><br>
<span class="quotelev1">&gt; in Vampir?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After some test i empirically admit that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; otfdumptime / 2267,999980709 = vampirTime (in &#181;s)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can work from that, but if anyone has any clue about that....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is about some weird processor ticking count, but how vampir 
</span><br>
<span class="quotelev1">&gt; can manage the conversion ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for help
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
<li><strong>Next message:</strong> <a href="18009.php">Joao Amaral: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Previous message:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
<li><strong>In reply to:</strong> <a href="18007.php">Mathieu westphal: "[OMPI users] exploitation of vampirTrace generated otf files."</a>
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
