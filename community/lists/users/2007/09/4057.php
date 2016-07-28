<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 06:25:25 2007" -->
<!-- isoreceived="20070925102525" -->
<!-- sent="Tue, 25 Sep 2007 03:25:20 -0700 (PDT)" -->
<!-- isosent="20070925102520" -->
<!-- name="Rayne" -->
<!-- email="lancer6238_at_[hidden]" -->
<!-- subject="[OMPI users] readv failed with errno=104" -->
<!-- id="697161.42427.qm_at_web32211.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Rayne (<em>lancer6238_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 06:25:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4058.php">Jeff Squyres: "Re: [OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<li><strong>Previous message:</strong> <a href="4056.php">Olli-Pekka Lehto: "[OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI users] readv failed with errno=104"</a>
<li><strong>Reply:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI users] readv failed with errno=104"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all, I'm using the SGE system on my school network,
<br>
and would like to know if the errors I received below
<br>
means there's something wrong with my MPI_Recv
<br>
function.
<br>
<p>[0,1,3][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed with errno=104
<br>
[0,1,2][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed with errno=104
<br>
<p>In my code, I have
<br>
<p>/* executed by P1 to P(p-1) */
<br>
for (row = 1 ; row &lt;= size[0] ; row++)
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(&amp;(cell[row][1]), length, stable, 0, rank,
<br>
MPI_COMM_WORLD); 
<br>
<p>&lt;some other computations&gt;
<br>
<p>/* P0 receive from P1 to P(p-2) */
<br>
for (source = 1 ; source &lt; (p-1) ; source++)
<br>
&nbsp;&nbsp;&nbsp;for (r = 1 ; r &lt;= size[0] ; r++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;(cell[r][1])+(source-1)*mlength,
<br>
mlength, stable,source, source, MPI_COMM_WORLD,
<br>
&amp;status);
<br>
<p>/* P0 receive from P(p-1) */
<br>
for (r = 1 ; r &lt;= size[0] ; r++)
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;(cell[r][1]) + (p-2)*mlength,
<br>
size[k]-(p-2)*mlength,stable, p-1, p-1,
<br>
MPI_COMM_WORLD, &amp;status); 
<br>
<p>When I used some printf statements to see when the
<br>
errors occur, they usually occur in the middle of the
<br>
first MPI_Recv function, usually when source is 2 and
<br>
the value of r usually differs, i.e. the error does
<br>
not seem to occur at the same exact row:
<br>
<p>Basically what I'm trying to do is:
<br>
Say there are a total of 4 processors (p=4), P0 - P3.
<br>
P1 and P2 each have a (size[0]+1)-by-(mlength+1)
<br>
matrix &quot;cell&quot;, and P3 has a (size[0]+1)-by-(length+1)
<br>
matrix &quot;cell&quot;. For P1 to P2, length = mlength.
<br>
size[k] = (p-2)*mlength + length(in P3)
<br>
<p>I'm trying to send the matrix &quot;cell&quot; in P1, P2 and P3
<br>
to P0, then have P0 combine them into one
<br>
(size[0]+1)-by-(size[k]+1) matrix &quot;cell&quot;. I'm sending
<br>
the matrix row-by-row.
<br>
<p>In short, say the matrix in P1, P2 and P3 are
<br>
----        ----       -----
<br>
-###        -ooo       -@@@@
<br>
-###        -ooo       -@@@@
<br>
-###        -ooo       -@@@@
<br>
<p>respectively. size[0] = 3, size[k] = 10, length = 3
<br>
for P1 and P2, length = 4 for P3 and mlength = 3. 
<br>
<p>I now need to combine them into 1 table in P0:
<br>
-----------
<br>
-###ooo@@@@
<br>
-###ooo@@@@
<br>
-###ooo@@@@ 
<br>
<p>What is strange is I do this combination of matrices
<br>
more than once in my DNA sequence alignment program,
<br>
and the error occurs only when it tries to combine
<br>
matrices from one or two particular sequences, but not
<br>
the others.
<br>
<p>Please help.
<br>
<p>Thank you.
<br>
<p>Regards,
<br>
Rayne
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Fussy? Opinionated? Impossible to please? Perfect.  Join Yahoo!'s user panel and lay it on us. <a href="http://surveylink.yahoo.com/gmrs/yahoo_panel_invite.asp?a=7">http://surveylink.yahoo.com/gmrs/yahoo_panel_invite.asp?a=7</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4058.php">Jeff Squyres: "Re: [OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<li><strong>Previous message:</strong> <a href="4056.php">Olli-Pekka Lehto: "[OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI users] readv failed with errno=104"</a>
<li><strong>Reply:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI users] readv failed with errno=104"</a>
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
