<?
$subject_val = "[OMPI users] MPI_Wait: wait for ever by using Issend using larger data-strings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  6 06:03:26 2010" -->
<!-- isoreceived="20100906100326" -->
<!-- sent="Mon, 6 Sep 2010 10:03:20 +0000 (GMT)" -->
<!-- isosent="20100906100320" -->
<!-- name="dbbmyx-franzxaver_at_[hidden]" -->
<!-- email="dbbmyx-franzxaver_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Wait: wait for ever by using Issend using larger data-strings" -->
<!-- id="680322.24942.qm_at_web24804.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Wait: wait for ever by using Issend using larger data-strings<br>
<strong>From:</strong> <a href="mailto:dbbmyx-franzxaver_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_Wait:%20wait%20for%20ever%20by%20using%20Issend%20using%20larger%20data-strings"><em>dbbmyx-franzxaver_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-09-06 06:03:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Previous message:</strong> <a href="14181.php">lyb: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>first of all sorry that I write a new thread. I already wrote a messge about &quot;Problem with the receive buffer size?&quot;. But I had some problems with my email-provider and the mailinglist. (I do not often use mailing lists).
<br>
<p>Here is the link to my old Message: <a href="http://www.open-mpi.org/community/lists/users/2010/09/14181.php">http://www.open-mpi.org/community/lists/users/2010/09/14181.php</a>
<br>
<p><p>I wrote a short programm that show my problem. (The coding ist very ugly. sorry). It send a serialized object(this time a very simple) as a string to the other process. 
<br>
<p>The problem is that it never gets return of the wait-operation when I using a more data. 
<br>
If you set the countR to 996 it waits forever. With 995 it works.
<br>
Can anyone help me?
<br>
<p>Thanks!!!
<br>
<p>(used library: boost_serialization)
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &lt;sstream&gt;
<br>
#include &lt;fstream&gt;
<br>
#include &lt;queue&gt;
<br>
<p>#include &lt;boost/archive/text_iarchive.hpp&gt;
<br>
#include &lt;boost/archive/text_oarchive.hpp&gt;
<br>
#include &lt;boost/archive/binary_iarchive.hpp&gt;
<br>
#include &lt;boost/archive/binary_oarchive.hpp&gt;
<br>
<p><p>#include &lt;boost/serialization/deque.hpp&gt;
<br>
<p><p><p>#define countS		1
<br>
#define countR		996
<br>
<p>class expObj{
<br>
public:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;friend class boost::serialization::access;
<br>
<p>&nbsp;&nbsp;&nbsp;char array[countS][countR];
<br>
&nbsp;&nbsp;&nbsp;template&lt;class Archive&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void serialize(Archive &amp; ar, const unsigned int version){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ar &amp; array;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expObj(){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; countS; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int j = 0; j &lt; countR; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array[i][j] = 'q';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
};
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request request_bilder_token_ro_multi;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::deque&lt;expObj&gt; senden;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expObj bild1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bild1.array[0][0] = 'a';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;senden.push_back(bild1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::ostringstream archive_stream1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;boost::archive::text_oarchive archive(archive_stream1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;archive &lt;&lt; senden;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::string outbound_data_ = archive_stream1.str();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Send - Size of message: &quot; &lt;&lt; outbound_data_.size() &lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Issend(&amp;outbound_data_[0], static_cast&lt;int&gt;(outbound_data_.size()), MPI_CHAR, 1, 0, MPI_COMM_WORLD,&amp;request_bilder_token_ro_multi);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while(true){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1/1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p><p><p>&nbsp;&nbsp;else if (rank == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status stat;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int flag = 0; //
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int msglen = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::deque&lt;expObj&gt; receive;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expObj obj;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;std::string serString;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iprobe(0, 0, MPI_COMM_WORLD, &amp;flag, &amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while (!flag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;stat, MPI_CHAR, &amp;msglen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt;&quot;Received size: &quot;&lt;&lt; msglen &lt;&lt;std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;serString.clear();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;serString.resize(msglen,'a');
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;serString[0], msglen, MPI_CHAR, 0, 0, MPI_COMM_WORLD, &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;req,&amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*do{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Test(&amp;req,&amp;flag,&amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}while(flag == 0);*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Receive: &lt;&quot; &lt;&lt; serString &lt;&lt;&quot;&gt;&quot;&lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;std::cout &lt;&lt; &quot;Rank 1 OK!&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Previous message:</strong> <a href="14181.php">lyb: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
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
