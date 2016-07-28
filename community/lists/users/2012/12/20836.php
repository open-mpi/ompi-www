<?
$subject_val = "[OMPI users] vtrun/otf question";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  1 02:57:17 2012" -->
<!-- isoreceived="20121201075717" -->
<!-- sent="Sat, 1 Dec 2012 02:56:52 -0500" -->
<!-- isosent="20121201075652" -->
<!-- name="Jaroslaw Slawinski" -->
<!-- email="jaross_at_[hidden]" -->
<!-- subject="[OMPI users] vtrun/otf question" -->
<!-- id="CAOAAPT5ZVS2wwjGZrU83ndXzgkLKBR6FKDAnk43Z0GM25v=g1g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] vtrun/otf question<br>
<strong>From:</strong> Jaroslaw Slawinski (<em>jaross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-01 02:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20837.php">Leta Melkamu: "[OMPI users] running &quot;openmpi&quot; with &quot;knem&quot;"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20835.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20838.php">Eric Chamberland: "[OMPI users] Lustre hints via environment variables/runtime parameters"</a>
<li><strong>Reply:</strong> <a href="20838.php">Eric Chamberland: "[OMPI users] Lustre hints via environment variables/runtime parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody, this is my first post.
<br>
<p>I needed to analyze the communication among nodes in a CFD code, so I
<br>
used vtrun from mpiexec.
<br>
Next, I dumped the data (otfdump) and summed up the messages volumes
<br>
for Send and Rec. lines
<br>
My results astonished me - the total Sent &lt;&gt; total Received.
<br>
Below I present a very small, 4 processes problem but it occurs in
<br>
every run for any number of processes:
<br>
This is the sum for SendMessage - first column is sender, second is
<br>
rec, 3rd the volume in bytes.
<br>
<p>0 0 0
<br>
0 1 33575534
<br>
0 2 17178610
<br>
0 3 17881624
<br>
1 0 75900050
<br>
1 1 0
<br>
1 2 9510508
<br>
1 3 20961830
<br>
2 0 39807134
<br>
2 1 9937288
<br>
2 2 0
<br>
2 3 30328578
<br>
3 0 32415748
<br>
3 1 33226154
<br>
3 2 55062442
<br>
3 3 0
<br>
<p>For ReceiveMessage - first column is rec, second sender, 3rd the volume:
<br>
<p>0 0 0
<br>
0 1 57682570
<br>
0 2 30912474
<br>
0 3 28154684
<br>
1 0 43260014
<br>
1 1 0
<br>
1 2 9937288
<br>
1 3 37073342
<br>
2 0 21455674
<br>
2 1 9510508
<br>
2 2 0
<br>
2 3 62425238
<br>
3 0 20559492
<br>
3 1 19374170
<br>
3 2 27494694
<br>
3 3 0
<br>
<p>Comparing, you can see that reported volumes are perfect between ranks
<br>
1 and 2 both directions only. But for others?
<br>
<p>I correlated the data with Vampir for this 4-proc case and it shows
<br>
agg. message volume partially from SendMessages, partially from
<br>
ReciveMessages. Below the table, data in MiB, in brackets you have
<br>
ident. or the Send or Rec part I got from OTF.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p0                p1             p2                p3
<br>
p0                     32.02(S)    16.383(S)     17.053(S)
<br>
p1 55.01(R)                          9.07(R/S)   18.477(R)
<br>
p2 29.48(R)        9.477(R/S)                    26.221(R)
<br>
p3 26.85(R)       31.687(S)   52.512(S)
<br>
<p>Can anybody explain this, please? Probably I do something wrong or I
<br>
do not understand how to interpret the data in otf. Can otfdump work
<br>
wrong? Or Vampir?
<br>
<p>Best regards
<br>
jaross
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20837.php">Leta Melkamu: "[OMPI users] running &quot;openmpi&quot; with &quot;knem&quot;"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20835.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20838.php">Eric Chamberland: "[OMPI users] Lustre hints via environment variables/runtime parameters"</a>
<li><strong>Reply:</strong> <a href="20838.php">Eric Chamberland: "[OMPI users] Lustre hints via environment variables/runtime parameters"</a>
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
