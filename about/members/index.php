<?php
$topdir = "../..";
$title = "The Open MPI Development Team";

include_once("$topdir/includes/header.inc");
?>

  <p>The Open MPI project has many members, contributors, and partners.
  "Contributors" provide resources to the project such as code (which
  requires having a signed Open MPI 3rd Party Contribution Agreement
  on file -- see <a href="<?php print($topdir);
  ?>/community/contribute/">How to Contribute</a> for details),
  testing, hosting services, etc.  "Members" are contributors who have
  voting rights, which entitles them to help determine the direction
  of the project, participate in release processes, etc.  "Partners"
  provide services to the Open MPI project.  See the full definitions
  of these three levels of membership
  <a href="https://github.com/open-mpi/ompi/wiki/Admistrative-rules">here</a>.</p>

  <p>Open MPI contributors who have submitted signed 3rd Party
  Contribution Agreements and members are listed below in alphabetical
  order:</p>

<p>
<center>
<table width="75%" border="<?php print($table_border); ?>" width=100%>
<?php

$member = 0;
$contrib = 1;
$partner = 2;

$organization = 0;
$individual = 1;

$num_members = 0;
$num_contribs = 0;
$num_partners = 0;

$num_organizations = 0;
$num_individuals = 0;

$contribs;

function print_line() {
    print("<tr><td colspan=6><hr></td></tr>\n\n");
}

class contrib {
    var $url, $short_name, $big_org, $logo, $level, $type;

    function contrib($url, $short_name, $long_name, $logo, $level, $type) {
        $this->url = $url;
        $this->short_name = $short_name;
        $this->long_name = $long_name;
        $this->logo = $logo;
        $this->level = $level;
        $this->type = $type;
    }
}

function add_org($url, $short_name, $long_name, $logo, $level) {
    global $contribs;
    global $organization;

    $contribs[] = new contrib($url, $short_name, $long_name, $logo, $level,
                              $organization);
}

function add_individual($url, $short_name, $long_name, $level) {
    global $contribs;
    global $individual;

    $contribs[] = new contrib($url, $short_name, $long_name, "", $level,
                              $individual);
}

function contrib_cmp($a, $b) {
    return strcasecmp($a->short_name, $b->short_name);
}

function print_contribs() {
    global $contribs;
    usort($contribs, "contrib_cmp");

    while ($contrib = each($contribs)) {
        print_item($contrib[1]->url,
                   $contrib[1]->short_name, $contrib[1]->long_name,
                   $contrib[1]->logo, $contrib[1]->level, $contrib[1]->type);
    }
}

function print_item($url, $short_name, $long_name, $logo, $level, $type) {
    $href_start = "";
    $href_end = "";
    $img = "&nbsp;";
    $skip_space = 3;
    global $member, $contrib, $partner;
    global $organization, $individual;
    global $num_members, $num_contribs, $num_partners;
    global $num_organizations, $num_individuals;

    if (!empty($url)) {
        $href_start = "<a href=\"$url\">";
        $href_end = "</a>";
    }

    print "<tr>\n";

    # Organization
    $org = "$href_start$short_name$href_end";
    if (!empty($long_name)) {
        $org .= "<br>$long_name";
    }
    print("<td>$org</td>\n");
    print("<td width=$skip_space>&nbsp;</td>\n");

    # Type
    print("<td align=\"center\">");
    if ($type == $organization) {
        print("Organization");
        ++$num_organizations;


    } else if ($type == $individual) {
        print("Individual");
        ++$num_individuals;
    }
    print("</td>\n");

    # Status
    print("<td align=\"center\">");
    if ($level == $member) {
        print("Member");
        ++$num_members;
    } else if ($level == $contrib) {
        print("Contributor");
        ++$num_contribs;
    } else if ($level == $partner) {
        print("Partner");
        ++$num_partners;
    }
    print("</td>\n<td width=$skip_space>&nbsp;</td>\n");

    # Logo
    if (!empty($logo)) {
        $size = GetImageSize($logo);
        print("<td align=center>$href_start<img src=\"$logo\" $size[3] border=\"0\">$href_end</td>\n");
    } else {
        print("<td>&nbsp;</td>\n");
    }

    print("</tr>\n\n");
    print_line();
}

print_line();

add_org("http://www.absoft.com/", "Absoft Corporation",
           "Software Development Tools", "absoft.jpg", $partner);

add_org("http://www.arm.com/", "ARM", "", "ARM_Corp_RGB.gif", $contrib);

add_org("http://www.amd.com/", "AMD", "", "amd.png", $contrib);

add_org("http://www.linaro.org/", "Linaro", "", "linaro.png", $contrib);

add_org("http://www.auburn.edu/", "Auburn University", "", 
        "auburn.jpg", $contrib);

add_org("http://www.lanl.gov/", "Los Alamos National Laboratory", "",
           "lanl.png", $member);

add_org("http://www.bull.com/", "Bull", "", "bull.png", $contrib);

add_org("http://www.chelsio.com/", "Chelsio Communications", "",
             "chelsio.jpg", $contrib);

add_org("http://www.coverity.com/", "Coverity Incorporated", "",
             "coverity.gif", $partner);

add_org("http://www.cisco.com/", "Cisco Systems, Inc.", "",
             "cisco.png", $member);

add_org("http://www.cs.uh.edu/", "Department of Computer Science",
             "University of Houston", "uh.jpg", $member);

// Removed by JMS 30 Oct 2013: this company no longer exists
//add_org("http://www.evergrid.com/", "Evergrid", "", 
//           "evergrid.jpg", $contrib);

add_org("http://www.hft-stuttgart.de", "HFT Stuttgart",
        "University of Applied Science",
        "hft-stuttgart.jpg", $contrib);

add_org("http://www.inria.fr/index.en.html", "Inria", 
           "The French National Institute for Research in Computer Science and Control", 
           "inria.jpg", $member);

add_org("http://www.minet.uni-jena.de/", 
           "Friedrich-Schiller-Universitat Jena", "", "jena.jpg", $contrib);

// Removed by JMS 30 Oct 2013: cannot find any reference to them on
// the internet
//add_org("", "Grid Technology Research Center",
//           "AIST", "aist.gif", $contrib);

add_org("http://www.hlrs.de/", "High Performance Computing Center
Stuttgart (HLRS)", "University of Stuttgart", "hlrs.png", $member);

add_org("http://www.ibm.com/", "IBM", "", "ibm.jpg", $contrib);

add_org("http://www.intel.com/", "Intel", "", "intel.jpg", $member);

add_org("http://icl.cs.utk.edu/", "Innovative Computing
Laboratory", "Department of Computer Science, University of
Tennessee", "utk-icl.gif", $member);

add_org("http://www.llnl.gov", "Lawrence Livermore National Laboratory",
           "", "llnl.png", $contrib);

add_org("http://www.mellanox.com/", "Mellanox Technologies", "", 
             "mellanox.gif", $member);

add_org("http://www.myricom.com/", "Myricom, Inc.", "", 
             "myricom.gif", $contrib);

add_org("http://www.nvidia.com/", "Nvidia", "",
        "nvidia.jpg", $member);

add_org("http://www.ornl.gov/", "Oak Ridge National Laboratory",
             "National Center for Computational Sciences",
             "ornl.jpg", $member);

add_org("http://www.osl.iu.edu/", "Open Systems Laboratory",
             "Pervasive Technologies Lab at Indiana University", 
             "iu-ptl.gif", $member);

add_org("http://www.cs.ubc.ca/labs/dsg/mpi-sctp/", 
           "Distributed Systems Group",
           "Computer Science Department, University of British Columbia", 
           "ubc.jpg", $contrib);

add_org("http://www.oracle.com/", "Oracle", "", "oracle.png", $contrib);

// Removed by JMS 30 Oct 2013: this company no longer exists (they
// were bought by IBM)
//add_org("http://www.platform.com/", "Platform Computing",
//             "", "platform.gif", $contrib);

// Removed by JMS 30 Oct 2013: this company no longer exists (they
// were bought by Intel)
// add_org("http://www.qlogic.com/", "QLogic Corporation", "",
//         "qlogic.gif", $contrib);

add_org("http://www.rist.or.jp/rist/ehome.html", "RIST",
           "Research Organization for Information Science and Technology",
           "rist.png", $member);

add_org("http://www.sandia.gov/", "Sandia National Laboratories",
           "", "sandia.jpg", $member);

add_org("http://www.tu-chemnitz.de/informatik/RA/",
           "Computer Architecture Group", 
           "Technische Universtaet Chemnitz", "tuc.jpg", $contrib);

add_org("http://www.tu-dresden.de/zih", "Center for Information 
Services and High Performance Computing (ZIH)",
           "Technische Universitaet Dresden", "zih-logo-en.png", $member);

add_org("http://www.cs.uwlax.edu/", "Computer Science Department",
        "University of Wisconsin-La Crosse", "uwlax.jpg", $contrib);

add_org("http://www.wattsys.com/", 
        "Watt Systems Systems Technologies, Inc.", "",
        "wattsys.jpg", $contrib);

add_org("http://hpcc.kpi.ua/", "High Performance Computing Center", 
        "National Technical University of Ukraine \"KPI\"",
        "ntuu_kpi.png", $contrib);

add_org("http://www.hs-esslingen.de/", "Hochschule Esslingen",
        "University of Applied Sciences", "hs-esslingen.png", $contrib);

add_individual("https://www.clarkson.edu/math/faculty_pages/black.html",
               "Kelly Black", "", $contrib);

add_individual("", "Artem Polyakov", "", $contrib);

add_individual("", "Brian Barrett", "", $contrib);

add_individual("http://users.dsic.upv.es/~jroman/",
               "Jose Roman", "", $contrib);

add_individual("http://users.dsic.upv.es/~jroman/",
               "Oscar Vega-Gisbert", "", $contrib);

add_individual("", "Soren Rasmussen", "", $contrib);

add_individual("", "Tetsuya Mishima", "", $contrib);

add_individual("http://www.linkedin.com/pub/craig-rasmussen/5/80b/b13",
               "Craig Rasmussen", "", $contrib);

add_individual("", "Xin He", "", $contrib);

add_individual("", "Rougier Antoine", "", $contrib);

add_individual("", "Gene Cooperman", "", $contrib);

add_individual("", "Evan Clinton", "", $contrib);

add_individual("", "Amnon Barak", "", $contrib);

add_individual("", "Amit Saha", "", $contrib);

add_individual("", "Alex Brick", "", $contrib);

print_contribs();

?>

</table>
</center>
</p>

<?php 
print "<p>Totals:<br>

<ul>
<li><strong>Members:</strong> $num_members</li>
<li><strong>Partners:</strong> $num_partners</li>
<li><strong>Contributors:</strong> $num_contribs</li>
<p>
<li><strong>Individuals:</strong> $num_individuals</li>
<li><strong>Organizations:</strong> $num_organizations</li>
</ul>
</p>\n";

  include_once("$topdir/includes/footer.inc"); 
