<?php
$topdir = "../..";

include_once("$topdir/includes/header.inc");
include_once("data.inc");
include_once("$topdir/papers/papers.inc");

paper_page($title, $authors, $presented, $abstract, $files, $month, $day, $year, $bibtex);

function p($name, $base) {
    if ("" != $base) {
        print ("<li> <a href=\"$base\">$name</a></li>\n\n");
    } else {
        print ("<li> $name (coming soon)</li>\n\n");
    }
}

?>

<p><font color=red><strong>Please note:</strong></font> These slides
are only a portion of the data presented at the workshop.  There were
many "dive into the code" reviews, interactive discussions, and
direct/indirect questions asked by the audience.</p>

<p><strong>Pre-arrival</strong></p>

<ul>
<?php
p("Prerequisites", "prerequisites.php");
?>
</ul>

<p><strong>Monday</strong></p>

<ul>
<?php
p("Introduction / Project Background", "mon_01_overall.pdf");
p("Project Structure", "mon_02_project_structure.pdf");
p("Code Base / build systems", "mon_03_code_base.pdf");
p("Open MPI: State of the Union", "mon_04_state_of_union.pdf");
p("Codes, Standards, and Miscellaneous", "mon_05_docs_and_standards.pdf");
p("Modular Component Architecture, Part 1", "mon_06_mca_part_1.pdf");
p("Modular Component Architecture, Part 2", "mon_07_mca_part_2.pdf");

?>
</ul>

<p><strong>Tuesday</strong></p>

<ul>
<?php
p("Introduction", "tue_01_intro.pdf");
p("Open Portability Access Layer (OPAL)", "tue_02_opal.pdf");
p("Open Run-Time Environment (ORTE)", "tue_03_orte.pdf");
p("Groups and Communicators (oh my)", "tue_04_groups_and_comms.pdf");
p("Datatypes", "tue_05_datatypes.pdf");
p("MPI Requests", "tue_06_requests.pdf");
p("Collectives, Topologies", "tue_07_coll_and_topo.pdf");

?>
</ul>

<p><strong>Wednesday</strong></p>

<ul>
<?php
p("Point to point architecture", "wed_01_pt2pt.pdf");
p("One-sided communication", "wed_02_one_sided_communication.pdf");
p("Memory management", "wed_03_memory_manager.pdf");
?>

</ul>

<p><strong>Thursday</strong></p>

<ul>
<?php
p("Lessons learned: MPI on InfiniBand, Gil Bloch, Mellanox Technologies", 
  "thu_01_mpi_on_infiniband.pdf");
p("Lessons learned: MPI on Myrinet, Patrick Geoffray, Myricom", 
  "thu_02_mpi_on_myrinet.pdf");

print("</ul>\n\n");

  include_once("$topdir/includes/footer.inc"); 
